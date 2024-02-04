<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsesController extends Controller
{

    public function __invoke()
    {
        return view('pages.uses');
        // TODO: Implement __invoke() method.
    }
}
