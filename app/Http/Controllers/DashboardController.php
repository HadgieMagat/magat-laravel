<?php

namespace App\Http\Controllers;

use App\Models\Post; // Post Model
use illuminate\Http\Request;

Class DashboardController extends Controller
{
    public function index()
    {
        $Posts = Post::count();
        $Published = Post::where('status', 1) ->count();
        $Unpublished = Post::where('status', 0) ->count();

        return view('Dashboard', compact('Posts','Published','Unpublished'));
    }
}