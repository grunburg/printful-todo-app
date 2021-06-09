<?php

namespace App\Controllers;

use App\Core\Database\Database;
use App\Models\Task;

class TaskController
{

    public static function index()
    {
        $task = new Task;
        $task->all();
    }

    public static function show(int $id)
    {
        $task = new Task;
        $task->find($id);
    }

    public static function create()
    {
        $data = (array) json_decode(file_get_contents('php://input'), true);

        $task = new Task;
        $task->insert($data);
    }

    public static function update(int $id)
    {
        $data = (array) json_decode(file_get_contents('php://input'), true);

        $task = new Task;
        $task->update($id, $data);
    }

    public static function delete(int $id)
    {
        $task = new Task;
        $task->delete($id);
    }

}
