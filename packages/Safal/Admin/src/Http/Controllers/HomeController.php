<?php

namespace Safal\Admin\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin::home.index');
    }
}
