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
    return view('pages.site.home');
});
Route::get('/filter', function () {
    return view('pages.site.filter');
});
Route::get('/pet-suggestion', function () {
    return view('pages.site.pet-suggestion');
});
Route::get('/add-pet', function () {
    return view('pages.site.add-pet');
});
Route::get('/appointments', function () {
    return view('pages.site.appointments');
});
Route::get('/profile', function () {
    return view('pages.site.profile');
});
Route::get('/appointments-list', function () {
    return view('pages.site.appointments-list');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
