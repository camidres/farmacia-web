<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerIndex extends Controller
{
    public function __invoke()
    {

        return view('index');

    }
}
