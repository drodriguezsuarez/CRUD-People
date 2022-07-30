<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\Son;
use App\Http\Requests\SonRequest;
use Illuminate\Http\Request;

class SonController extends Controller
{
    public function index(){
        $sons = Son::all();
        $parents = Person::all();
        return view( 'son', compact('parents', 'sons' ));
    }

    public function store(SonRequest $request){
        $son = new Son($request->all());
        $son->save();    

        return response()->json([
            'saved' => true,
            'son' => $son->load('parent')
        ]);
    }

    public function delete($id)
    {
        $son = Son::find($id);
        $son->delete();
        
        return response()->json([
            'delete' => true,
        ]);
    }

    public function edit(Son $son)
    {   
        $parents = Person::all();
        return view( 'son-edit', compact('parents','son'));
    }

    public function update(SonRequest $request, $id)
    {
        $son = Son::find($id);
        $son->update($request->all());
        return redirect()->route('son');
    }
}
