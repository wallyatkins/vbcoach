<?php

// Mock data for API tests

function getValidUserData() {
    return [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password123',
        'role' => 'Player',
    ];
}

function getUpdatedUserData() {
    return [
        'name' => 'Updated Test User',
    ];
}

function getEdgeCaseData() {
    return [
        'missing_fields' => [
            'name' => 'Test User',
            // email is missing
        ],
        'invalid_status' => [
            'status' => 'not_a_real_status',
        ],
    ];
}
