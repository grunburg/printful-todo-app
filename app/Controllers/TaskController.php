<?php

namespace App\Controllers;

use App\Core\Database\Database;
use App\Models\Task;

class TaskController {

    public static function index()
    {
        $task = new Task(new Database);
        $task->all();
    }

    public static function show($id)
    {
        $task = new Task(new Database);
        $task->find($id);
    }

    public static function create()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        $task = new Task(new Database);
        $task->insert($data);
    }

    public static function update()
    {

    }

    public static function destroy()
    {

    }

}
