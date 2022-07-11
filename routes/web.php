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

Route::get('/', function () {
    if(Auth::check()){
        return Redirect::to('home');
    }
    return view('auth.login');
}); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(App\Http\Controllers\ContactController::class)->group(function () {
    Route::get('/contact/create', 'create');
    Route::post('/contact', 'store');
    Route::get('/contact/{id}', 'show');
    Route::get('/contact/{id}/edit', 'edit');
    Route::put('/contact/{id}', 'update');
    Route::delete('/contact/{id}', 'destroy');
});
