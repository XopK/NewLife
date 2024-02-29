<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $animals = Animal::where('id_user', Auth::user()->id)->with('photos')->orderBy('created_at', 'desc')->get();
        $find = Animal::where('id_user', Auth::user()->id)->where('status', 2)->get();
        return view('profile', ['animals' => $animals, 'find' => $find]);
    }

    public function moderator()
    {
        $animals = Animal::with('photos')->get();
        return view('moderator', ['animals' => $animals]);
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

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_role' => 1,
        ]);

        if ($user) {
            Auth::login($user);
            return redirect('/')->with('success', 'Успешная регистрация!');
        } else {
            return redirect()->back()->with('error', 'Ошибка авторизации!');
        }
    }

    public function signin_valid(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ], [
            "password.required" => "Поле обязательно для заполнения!",
            "email.required" => "Поле обязательно для заполнения!",
            "email.email" => "Введите правильный адрес!",
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            if (Auth::user()->id_role == 2) {
                return redirect('/moderator')->with('success', 'Успешная авторизация!');
            }
            return redirect('/')->with('success', 'Успешная авторизация!');
        } else {
            return redirect()->back()->with('error', 'Проверьте введеные данные!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
