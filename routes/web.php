<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', function () {
    return view('welcome');
});

// C:\xampp\htdocs\crud-basic


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');            
Route::group(['prefix' => 'People'], function() {
    Route::post( '/store', [\App\Http\Controllers\PersonController::class, 'store'])->name('person.store');
    Route::delete( '/delete/{person}', [\App\Http\Controllers\PersonController::class, 'delete'])->name('person.delete');
    Route::get( '/edit/{person}', [\App\Http\Controllers\PersonController::class, 'edit'])->name('person.edit');
    Route::post( '/update/{person}', [\App\Http\Controllers\PersonController::class, 'update'])->name('person.update');
});

Route::get('city', [\App\Http\Controllers\CityController::class, 'index'])->name('city');            
Route::group(['prefix' => 'Cities'], function(){
    Route::post('/store', [\App\Http\Controllers\CityController::class, 'store'])->name('city.store');
    Route::get('/edit/{city}', [\App\Http\Controllers\CityController::class, 'edit'])->name('city.edit');
    Route::delete('/delete/{id}', [\App\Http\Controllers\CityController::class, 'delete'])->name('city.delete');
    Route::post('/update/{id}', [\App\Http\Controllers\CityController::class, 'update'])->name('city.update');
});

Route::get('son', [\App\Http\Controllers\SonController::class, 'index'])->name('son');            
Route::group(['prefix' => 'Sons'], function(){
    Route::post('/store', [\App\Http\Controllers\SonController::class, 'store'])->name('son.store');
    Route::get('/edit/{son}', [\App\Http\Controllers\SonController::class, 'edit'])->name('son.edit');
    Route::delete('/delete/{id}', [\App\Http\Controllers\SonController::class, 'delete'])->name('son.delete');
    Route::post('/update/{id}', [\App\Http\Controllers\SonController::class, 'update'])->name('son.update');
});

Route::get('test', function() {
    // return \App\Models\Person::with(['city', 'sons' => function($son){
    //     $son->where('age', '<=', 10);
    // }])->get();
    // return \App\Models\Person::with('city')->find(1);
    // $people = \App\Models\City::with('person')->get();
    return \App\Models\Person::has('sons')->with('sons')->get();
});

