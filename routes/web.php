<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\usercontroller;
use App\Http\Middleware\AllowPerson;


Route::get('/index', [usercontroller::class, 'index']);

 
Route::get('/form', [usercontroller::class, 'form']);
// For Security
//->middleware('store')
Route::post('/store', [usercontroller::class, 'store']);

Route::get('/show', [usercontroller::class, 'show']);

Route::get('/delete/{id}', [usercontroller::class, 'delete']);


Route::get('/edit/{id}', [usercontroller::class, 'edit']);


Route::get('/', function () {
    return view('welcome');
});


Route::post('/update_data/{id}', [usercontroller::class, 'update_data']);


//Route::get('/about/{paramname?}', "App\Http\Controllers\usercontroller@form");

  
