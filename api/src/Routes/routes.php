<?php

use Slim\App;
use App\Controllers\UserController;

return function (App $app) {
    $app->post('/users', [UserController::class, 'createUser']);
    $app->get('/users/{id}', [UserController::class, 'getUser']);
    $app->put('/users/{id}', [UserController::class, 'updateUser']);
    $app->patch('/users/{id}/status', [UserController::class, 'toggleUserStatus']);
};
