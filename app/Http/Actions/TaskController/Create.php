<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use App\Models\Task;

class Create extends Action
{
    public function json()
    {
        return Task::factory()->make();
    }

    public function view()
    {
        return view('tasks.create');
    }
}