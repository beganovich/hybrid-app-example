<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use Illuminate\View\View;

class Edit extends Action 
{
    public function json(): Edit
    {
        return $this->properties['task'];
    }

    public function view(): View
    {
        return view('tasks.edit', $this->properties);
    }
}