<?php

// Simple API Test Script

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/mock_data.php';

use App\Config\Database;

// --- Test Runner Setup ---
$testStats = ['passed' => 0, 'failed' => 0];

// Initialize and clear the database
$dbPath = __DIR__ . '/../db/test_vbcoach.sqlite';
Database::init($dbPath);
Database::clearDatabase();

// Start the server and get the port
shell_exec('bash ' . __DIR__ . '/start_test_server.sh');
sleep(1); // Give the server a moment to start
$port = trim(file_get_contents(__DIR__ . '/server.port'));
$baseUrl = "http://localhost:$port";

// --- Test Functions ---
function makeRequest($url, $method = 'GET', $data = [])
{
    $ch = curl_init();
    $options = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ];

    if (!empty($data)) {
        $options[CURLOPT_POSTFIELDS] = json_encode($data);
    }

    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ['code' => $httpCode, 'body' => json_decode($response, true)];
}

function assertTest($condition, $message, $expected = 'N/A', $actual = 'N/A')
{
    global $testStats;
    if ($condition) {
        echo "✅  PASS: $message\n";
        $testStats['passed']++;
    } else {
        echo "❌ FAIL: $message\n";
        if ($expected !== 'N/A') {
            echo "     Expected: $expected\n";
            echo "     Actual:   $actual\n";
        }
        $testStats['failed']++;
    }
}

// --- Main Execution ---
try {
    echo "\n--- Testing Happy Path ---\n";

    // 1. Create User
    $userData = getValidUserData();
    $response = makeRequest("$baseUrl/users", 'POST', $userData);
    assertTest($response['code'] === 201, 'Create User returns 201 status', 201, $response['code']);
    assertTest(!empty($response['body']['userId']), 'Create User response contains userId');
    $userId = $response['body']['userId'];
    echo "Created user with ID: $userId\n";

    // 2. Get User
    $response = makeRequest("$baseUrl/users/$userId");
    assertTest($response['code'] === 200, 'Get User returns 200 status', 200, $response['code']);
    assertTest($response['body']['name'] === $userData['name'], 'Get User returns correct name', $userData['name'], $response['body']['name']);

    // 3. Update User
    $updateData = getUpdatedUserData();
    $response = makeRequest("$baseUrl/users/$userId", 'PUT', $updateData);
    assertTest($response['code'] === 200, 'Update User returns 200 status', 200, $response['code']);

    // 4. Toggle User Status
    $statusData = ['status' => 'disabled'];
    $response = makeRequest("$baseUrl/users/$userId/status", 'PATCH', $statusData);
    assertTest($response['code'] === 200, 'Toggle User Status returns 200 status', 200, $response['code']);
    $response = makeRequest("$baseUrl/users/$userId");
    assertTest($response['body']['status'] === 'disabled', 'User status is now disabled', 'disabled', $response['body']['status']);


    echo "\n--- Testing Edge Cases ---\n";

    // 1. Create user with missing fields
    $edgeCaseData = getEdgeCaseData();
    $response = makeRequest("$baseUrl/users", 'POST', $edgeCaseData['missing_fields']);
    assertTest($response['code'] === 400, 'Create User with missing fields returns 400', 400, $response['code']);

    // 2. Create user with duplicate email
    $response = makeRequest("$baseUrl/users", 'POST', $userData);
    assertTest($response['code'] === 409, 'Create User with duplicate email returns 409', 409, $response['code']);

    // 3. Get non-existent user
    $response = makeRequest("$baseUrl/users/999999");
    assertTest($response['code'] === 404, 'Get non-existent user returns 404', 404, $response['code']);

    // 4. Toggle status with invalid value
    $response = makeRequest("$baseUrl/users/$userId/status", 'PATCH', $edgeCaseData['invalid_status']);
    assertTest($response['code'] === 400, 'Toggle status with invalid value returns 400', 400, $response['code']);

} finally {
    // --- Teardown ---
    shell_exec('bash ' . __DIR__ . '/stop_test_server.sh');

    // --- Summary ---
    echo "\n--- Test Summary ---\n";
    echo "Passed: {$testStats['passed']}\n";
    echo "Failed: {$testStats['failed']}\n";

    if ($testStats['failed'] > 0) {
        exit(1);
    }

    echo "\n🎉 All API tests passed! 🎉\n";
}

