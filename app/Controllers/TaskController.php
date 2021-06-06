<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController {

    public static function index()
    {
        $task = Task::all();
        Task::fetch($task);
    }

    public static function show($id)
    {
        $task = Task::find($id);
        Task::fetch($task);
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
