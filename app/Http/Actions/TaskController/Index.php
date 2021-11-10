<?php

namespace App\Http\Actions\TaskController;

use App\Models\Task;
use App\Http\Actions\Action;
use Illuminate\Database\Eloquent\Collection;

class Index extends Action
{
    protected function tasks(): Collection
    {
        return Task::all();
    }
    
    public function json()
    {
        return $this->tasks();
    }

    public function view()
    {
        return view('tasks.index', ['tasks' => $this->tasks()]);
    }
}
