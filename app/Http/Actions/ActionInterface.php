<?php

namespace App\Http\Actions;

use Illuminate\View\View;

interface ActionInterface
{
    public function json();

    public function view();
}
