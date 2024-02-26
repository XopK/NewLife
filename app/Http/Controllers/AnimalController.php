<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    public function addAnimal()
    {
        return view('addAnimal');
    }

    public function search()
    {
        return view('search');
    }

    public function animal()
    {
        return view('animal');
    }

    public function animalAdd(Request $request)
    {
        $request->validate([
            'contactNumber' => 'required|regex:/\+7\([0-9][0-9][0-9]\)[0-9]{3}(\-)[0-9]{2}(\-)[0-9]{2}$/',
            'email' => 'required|email',
            'animalType' => 'required|regex:/[А-Яа-яЁё]/u',
            'photo' => 'image|required',
            'additionalInfo' => 'required',
            'district' => 'required|regex:/[А-Яа-яЁё]/u',
            'foundDate' => 'required|date',
        ], [
            'contactNumber.required' => 'Заполните поле!',
            'email.required' => 'Заполните поле!',
            'animalType.required' => 'Заполните поле!',
            'photo.required' => 'Заполните поле!',
            'additionalInfo.required' => 'Заполните поле!',
            'district.required' => 'Заполните поле!',
            'foundDate.required' => 'Заполните поле!',
            'contactNumber.regex' => 'Введите верный формат!',
            'email.email' => 'Введите верный формат!',
            'animalType.regex' => 'Только кириллица!',
            'photo.image' => 'Только фото (img,png и т.д)',
            'district.regex' => 'Только кириллица!',
            'foundDate' => 'Введите дату!',
        ]);

        if (Auth::user() !== null) {
            $animal = Animal::create([
                'contactNumber' => $request->contactNumber,
                'email' => $request->email,
                'animalType' => $request->animalType,
                'additionalInfo' => $request->additionalInfo,
                'claim' => $request->claim,
                'district' => $request->district,
                'id_user' => Auth::user()->id,
            ]);
        } else {
        }
    }
}
