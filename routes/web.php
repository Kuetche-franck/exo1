<?php

use App\Http\Controllers\WelcomeController;
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

/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/
Route::get('/',[WelcomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/get-a-quote', function () {
    return view('get-a-quote');
})->name('get-a-quote');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/service-details', function () {
    return view('service-details');
})->name('service-details');
