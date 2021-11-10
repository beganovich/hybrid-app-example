<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use Illuminate\View\View;

class Edit extends Action 
{
    public function json(): Edit
    {
        return $this->task;
    }

    public function view(): View
    {
        return view('tasks.edit', ['task' => $this->task]);
    }
}