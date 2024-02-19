<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
