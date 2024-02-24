<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('/', [MyController::class, 'index']);
Route::get('/about', [MyController::class, 'about']);
Route::get('/foot', [MyController::class, 'foot']);
Route::get('/contract', [MyController::class, 'contact']);


Route::get('/hi', function(){
    return 'Hi';
})->middleware('throttle:3,1');

Route::get('/tasks', function(){
    return View('tasks');
});

Route::get('/layout', function(){
    return view('child');
});
