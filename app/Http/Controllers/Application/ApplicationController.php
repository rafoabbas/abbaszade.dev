<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function __invoke()
    {

        return view('pages.index');
        // TODO: Implement __invoke() method.
    }
}
