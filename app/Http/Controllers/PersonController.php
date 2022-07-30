<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
  
    public function store(PersonRequest $request)
    {
        $person = new Person($request->all());
        $person->save();
        
        return response()->json([
            'saved' => true,
            'person' => $person->load('city')
        ]);
    }

    public function delete($id)
    {
        $person = Person::find($id);
        $person->delete();
        // return redirect()->route('home.index');
        return response()->json([
            'delete' => true,
        ]);
    }

    public function edit(Person $person)
    {   
        $cities = City::get();
        $person->load('sons');
        return view( 'person.edit', compact('person','cities'));
    }

    public function update(PersonRequest $request, $id)
    {
        $person = Person::find($id);
        $person->update($request->all());
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
