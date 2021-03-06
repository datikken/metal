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

    public function services_details($id)
    {
        return view('pages.service_details');
    }

    public function work()
    {
        return view('pages.work');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function test()
    {
        return view('pages.test');
    }
}
