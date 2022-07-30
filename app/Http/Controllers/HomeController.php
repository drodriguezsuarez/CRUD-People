<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $people = Person::with('city', 'sons')->get();
        $cities = City::get();
        return view( 'welcome', compact( 'people', 'cities'));
    }

    public function about($name = null)
    {
        if ($name == null) return 'no hay nadie';
        return 'hola ($name)';
    }
}
