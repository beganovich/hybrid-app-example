<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use App\Models\Task;

class Show extends Action
{
    public function json(): Task
    {
        return $this->properties['task'];
    }

    public function view()
    {
        return view('tasks.show', [
            'task' => $this->properties['task']]
        );
    }
}