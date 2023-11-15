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
Route::get('halo', function () {
    // Disini bisa diisi apa saja
    return "Halo apa kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar</h1>";
});

Route::get('blog', function () {
	return view('blog');
});
Route::get('day1', function () {
	return view('hello');
});
Route::get('day2', function () {
	return view('link');
});
Route::get('day3', function () {
	return view('responsive');
});
Route::get('tugasbootstrap', function () {
	return view('custombootstrap');
});
Route::get('js1', function () {
	return view('js1');
});
Route::get('js2', function () {
	return view('js2');
});
Route::get('js3', function () {
	return view('js3');
});
Route::get('tugas1', function () {
	return view('tugas1');
});
Route::get('tugas2', function () {
	return view('tugas2');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
