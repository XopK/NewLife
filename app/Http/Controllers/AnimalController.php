<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\AnimalPhoto;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    public function index()
    {
        $review = Review::with('user')->orderBy('created_at', 'desc')->get();
        $animals = Animal::with('photos', 'user')->where('status', 1)->get();
        return view('index', ['animals' => $animals, 'reviews' => $review]);
    }

    public function addAnimal()
    {
        return view('addAnimal');
    }

    public function search()
    {
        $animals = Animal::with('photos', 'user')->where('status', 1)->get();
        return view('search', ['animals' => $animals]);
    }

    public function animal(Animal $id)
    {
        $id->load('photos');
        return view('animal', ['animal' => $id]);
    }

    public function animalAdd(Request $request)
    {
        if (Auth::user() !== null) {
            $request->validate([
                'animalType' => 'required|regex:/[А-Яа-яЁё]/u',
                'photo' => 'required ',
                'additionalInfo' => 'required',
                'district' => 'required|regex:/[А-Яа-яЁё]/u',
                'foundDate' => 'required|date',
            ], [
                'animalType.required' => 'Заполните поле!',
                'photo.required' => 'Заполните поле!',
                'additionalInfo.required' => 'Заполните поле!',
                'district.required' => 'Заполните поле!',
                'foundDate.required' => 'Заполните поле!',
                'animalType.regex' => 'Только кириллица!',
                'district.regex' => 'Только кириллица!',
                'foundDate' => 'Введите дату!',
            ]);
            $animal = Animal::create([
                'contactNumber' => Auth::user()->phone,
                'email' => Auth::user()->email,
                'animalType' => $request->animalType,
                'additionalInfo' => $request->additionalInfo,
                'claim' => $request->claim,
                'status' => 0,
                'find_date' => $request->foundDate,
                'district' => $request->district,
                'id_user' => Auth::user()->id,
            ]);
            foreach ($request->file('photo') as $photo) {
                $name = $photo->hashName();
                $store = $photo->store('public/animals');

                AnimalPhoto::create([
                    'id_animal' => $animal->id,
                    'photo' => $name,
                ]);
            }
        } else {
            $request->validate([
                'contactNumber' => 'required|regex:/\+7\([0-9][0-9][0-9]\)[0-9]{3}(\-)[0-9]{2}(\-)[0-9]{2}$/',
                'email' => 'required|email',
                'animalType' => 'required|regex:/[А-Яа-яЁё]/u',
                'photo' => 'required ',
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
                'district.regex' => 'Только кириллица!',
                'foundDate' => 'Введите дату!',
            ]);

            $animal = Animal::create([
                'contactNumber' => $request->contactNumber,
                'email' => $request->email,
                'animalType' => $request->animalType,
                'additionalInfo' => $request->additionalInfo,
                'claim' => $request->claim,
                'status' => 0,
                'find_date' => $request->foundDate,
                'district' => $request->district,
                'id_user' => null,
            ]);

            foreach ($request->file('photo') as $photo) {
                $name = $photo->hashName();
                $store = $photo->store('public/animals');

                AnimalPhoto::create([
                    'id_animal' => $animal->id,
                    'photo' => $name,
                ]);
            }
        }
        if ($animal) {
            return redirect('/')->with('success', 'Объявление добавлено!');
        } else {
            return redirect()->back()->with('error', 'Ошибка!');
        }
    }

    public function change(Request $request, Animal $id)
    {
        $status = $request->input('status', null);
        if ($status == 3) {
            $id->delete();
        }
        $id->update(['status' => $status]);

        return redirect()->back()->with('success', 'Статус обновлен!');
    }

    public function filter(Request $request)
    {
        if (isset($request->all)) {
            $results = Animal::query()
                ->where('status', 1)
                ->where('animalType', 'like', "%{$request->all}%")
                ->orWhere('additionalInfo', 'like', "%{$request->all}%")
                ->orWhere('district', 'like', "%{$request->all}%")
                ->orWhere('find_date', 'like', "%{$request->all}%")
                ->with('photos', 'user')
                ->get();
        } else {
            $results = Animal::query()
                ->where('status', 1)
                ->where('animalType', 'like', "%{$request->animalType}%")
                ->where('additionalInfo', 'like', "%{$request->additionalInfo}%")
                ->where('district', 'like', "%{$request->area}%")
                ->where('find_date', 'like', "%{$request->date}%")
                ->with('photos', 'user')
                ->get();
        }
        return view('search', ['animals' => $results]);
    }

    public function review()
    {
        return view('review');
    }

    public function reviewadd(Request $request)
    {
        $request->validate([
            'review' => 'required',
            'photo' => 'required',
        ], [
            'review.required' => 'Заполните поле!',
            'photo.required' => 'Заполните поле!',
        ]);

        if (Auth::user()) {
            $name = $request->file('photo')->hashName();
            $store = $request->file('photo')->store('public/review');

            Review::create([
                'review' => $request->review,
                'photo_review' => $name,
                'id_user' => Auth::user()->id,
            ]);
            return redirect()->back()->with('success', 'Добавлено!');
        } else {
            return redirect()->back()->with('error', 'Авторизируйтесьы');
        }
    }
}
