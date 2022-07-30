<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){

        $cities = City::all();
        return view('city', compact('cities'));
    }
    public function store(CityRequest $request){

        $city = new City($request->all());
        $city->save();    

        return response()->json([
            'saved' => true,
            'city' => $city
        ]);
    }

    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route('city');
    }

    public function edit(City $city){   

        return view( 'city-edit', compact('city'));
    }

    public function update(CityRequest $request, $id)
    {
        $city = City::find($id);
        $city->update($request->all());
        return redirect()->route('city');
    }
}
