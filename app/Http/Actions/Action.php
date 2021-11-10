<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

abstract class Action
{
    protected Request $request;

    protected $properties;

    public static function dispatch(Request $request = null, $properties = null)
    {
        $action = app()->make(get_called_class());

        $action->request = $request ?? request();
        $action->properties = $properties ?? [];

        if (request()->wantsJson()) {
            return App::call([$action, 'json']);
        }

        return App::call([$action, 'view']);
    }
}
