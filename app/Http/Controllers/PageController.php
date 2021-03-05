<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function company()
    {
        return view('pages.company');
    }
}
