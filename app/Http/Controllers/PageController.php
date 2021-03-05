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

    public function services()
    {
        return view('pages.services');
    }

    public function work()
    {
        return view('pages.work');
    }

    public function news()
    {
        return view('pages.news.blade');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
