<?php

use App\Http\Controllers\datacontroller;
use App\Models\childranhome;
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

Route::get('/', [datacontroller::class, 'searchwelcome'])->name('welcome.view');

Route::get('/login', function () {
    return view('login');
});

Route::get('/singup', function () {
    return view('singup');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/viewall', function () {
    $search=childranhome::all();
    return redirect(route('user.view',$search));
});

Route::post('/addinformation','App\Http\Controllers\datacontroller@addinformation');


Route::post('/search','App\Http\Controllers\datacontroller@searchCity');

Route::get('/users','App\Http\Controllers\datacontroller@searchCity');

Route::get('/user', [datacontroller::class, 'searchCity'])->name('user.view');

Route::post('/signupdata','App\Http\Controllers\datacontroller@userdata');

Route::post('/loginValidate','App\Http\Controllers\datacontroller@loginvalidate');


Route::get('/userBook', function () {
    $values=App\Models\childranhome::all();
    return view('userBook')->with('values',$values);
})->name('user.booking');


Route::post('/addbooking','App\Http\Controllers\datacontroller@addbooking');
