<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController
{

    public static function index(Task $task)
    {
        $task->all();
    }

    public static function show(Task $task, $id)
    {
        $task->find($id);
    }

    public static function create(Task $task)
    {
        $data = (array) json_decode(file_get_contents('php://input'), true);
        $task->insert($data);
    }

    public static function update(Task $task, int $id)
    {
        $data = (array) json_decode(file_get_contents('php://input'), true);
        $task->update($id, $data);
    }

    public static function mark(Task $task, int $id)
    {
        $data = (array) json_decode(file_get_contents('php://input'), true);
        $task->mark($id, $data);
    }

    public static function delete(Task $task, int $id)
    {
        $task->delete($id);
    }

}
