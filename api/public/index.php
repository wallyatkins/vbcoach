<?php

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Config\Database;

require __DIR__ . '/../vendor/autoload.php';

// Initialize the database
if (getenv('APP_ENV') === 'test') {
    $dbPath = __DIR__ . '/../db/test_vbcoach.sqlite';
} else {
    $dbPath = __DIR__ . '/../db/vbcoach.sqlite';
}
Database::init($dbPath);
Database::createTables();

$app = AppFactory::create();

// This middleware will parse the JSON body of requests
$app->addBodyParsingMiddleware();

// Health check route
$app->get('/health-check', function (Request $request, Response $response, $args) {
    $response->getBody()->write(json_encode(['status' => 'ok']));
    return $response->withHeader('Content-Type', 'application/json');
});

// Load routes
$routes = require __DIR__ . '/../src/Routes/routes.php';
$routes($app);

$app->run();
