<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }

    public function show(string $slug)
    {
        return view('pages.blog.show', compact('slug'));
    }
}
