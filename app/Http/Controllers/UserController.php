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

    public function signup_valid(Request $request)
    {
        $request->validate(
            [
                "email" => "required|unique:users|email",
                "name" => "required",
                "surname" => "required",
                "phone" => 'required',
                "password" => "required",
                "confirmPassword" => "required|same:password",
            ],
            [
                "email.required" => "Поле обязательно для заполнения!",
                "email.email" => "Введите правильный адрес!",
                "email.unique" => "Данный адрес занят!",
                "phone.required" => "Поле обязательно для заполнения!",
                "password.required" => "Поле обязательно для заполнения!",
                "confirmPassword.required" => "Поле обязательно для заполнения!",
                "surname.required" => "Поле обязательно для заполнения!",
                "name.required" => "Поле обязательно для заполнения!",
                "confirmPassword.same" => "Пароли должны совпадать!"
            ]
        );
    }
}
