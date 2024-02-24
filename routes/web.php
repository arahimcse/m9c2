<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function(){
    return 'Hi';
})->middleware('throttle:3,1');

Route::get('/tasks', function(){
    return View('tasks');
});

Route::get('/layout', function(){
    return view('child');
});