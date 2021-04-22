<?php

namespace Safal\Admin\Http\Controllers;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin::auth.login');
    }

    // public function getRegister()
    // {
    //     return view('admin::auth.register');
    // }
}
