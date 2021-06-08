<?php

use App\Controllers\TaskController;
use App\Core\Router\Router;

Router::get('/api/tasks', fn() => TaskController::index());

Router::post('/api/tasks/create', fn() => TaskController::create());

Router::get('/api/tasks/:id', fn($id) => TaskController::show($id));
