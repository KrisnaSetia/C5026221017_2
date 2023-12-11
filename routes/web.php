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

Route::get('blog1', function () {
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
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});
//route CRUD

// Data Pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//Tugas Pra UAS
Route::get('/tugasprauas','App\Http\Controllers\LaptopController@index');
Route::get('/tugasprauas/tambahlaptop','App\Http\Controllers\LaptopController@tambah');
Route::post('/tugasprauas/store','App\Http\Controllers\LaptopController@store');
Route::get('/tugasprauas/edit/{id}','App\Http\Controllers\LaptopController@edit');
Route::post('/tugasprauas/update','App\Http\Controllers\LaptopController@update');
Route::get('/tugasprauas/hapus/{id}','App\Http\Controllers\LaptopController@hapus');
Route::get('/tugasprauas/cari','App\Http\Controllers\LaptopController@cari');
Route::get('/tugasprauas/view/{id}','App\Http\Controllers\LaptopController@view');

// Keranjang Belanja
Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index');
Route::get('/keranjangbelanja/tambahbelanja','App\Http\Controllers\BelanjaController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\BelanjaController@hapus');

Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::post('/kategori/hasil', 'App\Http\Controllers\KategoriController@hasil');

