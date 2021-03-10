<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxContentController extends Controller
{
    public function ajax_callback_form()
    {
        return view('components.forms.callback_form');
    }

    public function show_thanx()
    {
        return view('components.forms.thanx');
    }

    public function show_thanx_feedback()
    {
        return view('components.forms.thanx_feedback');
    }
}
