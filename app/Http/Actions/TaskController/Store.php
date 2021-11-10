<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use App\Models\Task;

class Store extends Action
{
    protected function store(): Task
    {
        return Task::create(
            $this->request->validated()
        );
    }

    public function json(): Task
    {
        return $this->store();
    }

    public function view()
    {
        $task = $this->store();

        return redirect()->route('tasks.show', $task->id);
    }
}