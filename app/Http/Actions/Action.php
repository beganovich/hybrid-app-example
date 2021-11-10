<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;

abstract class Action implements ActionInterface
{
    protected Request $request;

    protected $properties;

    public static function dispatch(Request $request = null, $properties = null)
    {
        $action = new static;

        $action->request = $request ?? request();
        $action->properties = $properties ?? [];
 
        if (request()->wantsJson()) {
            return $action->json();
        }

        return $action->view();
    }
}
