<?php

namespace App\Controllers;

use App\Core\Database\Database;
use App\Models\Task;

class TaskController {

    public static function index()
    {
        $task = new Task(new Database());
        $task->all();
    }

    public static function show($id)
    {
        $task = new Task(new Database());
        $task->find($id);
    }

    public static function create()
    {

    }

    public static function update()
    {

    }

    public static function destroy()
    {

    }

}
