<?php

use App\Controllers\TaskController;
use App\Core\Router\Router;

Router::get('/api/tasks', fn() => TaskController::index());

Router::get('/api/tasks/:id', fn($id) => TaskController::show($id));