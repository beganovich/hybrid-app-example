<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

abstract class Action
{
    protected $properties;

    public static function dispatch($properties = null)
    {
        $action = app()->make(get_called_class());

        $action->properties = $properties ?? [];

        $parent = debug_backtrace()[1];

        $reflection = new \ReflectionMethod($parent['class'], $parent['function']);

        foreach ($reflection->getParameters() as $parameter) {
            $action->{$parameter->getName()} = $parent['args'][$parameter->getPosition()];
        }

        if (request()->wantsJson()) {
            return App::call([$action, 'json']);
        }

        return App::call([$action, 'view']);
    }
}
