<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show homepage.
     */
    public function index()
    {
        return view('pages.home.index');
    }
}
