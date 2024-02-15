<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function profile()
    {
        return view('profile');
    }

    public function moderator()
    {
        return view('moderator');
    }
}
