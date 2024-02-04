<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __invoke()
    {
        return view('pages.contact');
        // TODO: Implement __invoke() method.
    }
}
