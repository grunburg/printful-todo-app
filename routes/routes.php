<?php

use App\Controllers\TaskController;
use App\Core\Router\Router;

Router::get('/api/tasks', fn() => TaskController::index());

Router::get('/api/tasks/:id', fn($id) => TaskController::show($id));

Router::post('/api/tasks/create', fn() => TaskController::create());

Router::put('/api/tasks/:id/update', fn($id) => TaskController::update($id));

Router::delete('/api/tasks/:id/delete', fn($id) => TaskController::delete($id));
