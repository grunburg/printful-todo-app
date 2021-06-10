<?php

use App\Controllers\TaskController;
use App\Core\Router\Router;
use App\Models\Task;

Router::get('/api/tasks', fn() => TaskController::index(new Task));

Router::get('/api/tasks/:id', fn($id) => TaskController::show(new Task, $id));

Router::post('/api/tasks/create', fn() => TaskController::create(new Task));

Router::put('/api/tasks/:id/update', fn($id) => TaskController::update(new Task, $id));

Router::put('/api/tasks/:id/mark', fn($id) => TaskController::mark(new Task, $id));

Router::delete('/api/tasks/:id/delete', fn($id) => TaskController::delete(new Task, $id));
