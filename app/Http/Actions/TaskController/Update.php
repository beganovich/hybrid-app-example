<?php

namespace App\Http\Actions\TaskController;

use App\Http\Actions\Action;
use Illuminate\Http\RedirectResponse;

class Update extends Action
{
    public function update(): bool
    {
        return $this->task->fill(
            $this->request->validated()
        )->save();
    }

    public function json()
    {
        $this->update();

        return $this->task;
    }

    public function view(): RedirectResponse
    {
        $this->update();

        return back()->with('message', 'Task updated succesfully');
    }
}