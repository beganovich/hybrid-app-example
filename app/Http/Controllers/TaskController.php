<?php

namespace App\Http\Controllers;

use App\Http\Actions\TaskController\Create;
use App\Http\Actions\TaskController\Edit;
use App\Http\Actions\TaskController\Index;
use App\Http\Actions\TaskController\Show;
use App\Http\Actions\TaskController\Store;
use App\Http\Actions\TaskController\Update;
use App\Http\Requests\Tasks\StoreTaskRequest;
use App\Http\Requests\Tasks\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Index::dispatch();
    }

    public function create()
    {
        return Create::dispatch();
    }

    public function store(StoreTaskRequest $request)
    {
        return Store::dispatch();
    }

    public function show(Task $task)
    {
        return Show::dispatch();
    }

    public function edit(Task $task)
    {
        return Edit::dispatch();
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        return Update::dispatch();
    }
}
