<?php

use App\Http\Controllers\LayananbertarifController;
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
Route::get('test', function () {
    return view('layout.test');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('respon', function () {
    return view('admin.respon');
});

Route::get('login', function () {
    return view('user.logIn');
});

Route::get('signup', function () {
    return view('user.signup');
});

Route::get('reset', function () {
    return view('user.reset');
});

Route::get('pendidikan', function () {
    return view('formulir.createPendidikan');
});

Route::get('penanggulangan-bencana', function () {
    return view('formulir.createPenanggulanganBencana');
});

Route::get('sosial', function () {
    return view('formulir.createSosial');
});

Route::get('keagamaan', function () {
    return view('formulir.createKeagamaan');
});



Route::get('pemerintahan', function () {
    return view('formulir.createPemerintahan');
});

Route::get('pertahanan-keamanan', function () {
    return view('formulir.createPertahanandanKeamanan');
});

Route::get('dashboard', function () {
    return view('menu.dashboard');
});

Route::get('formulir', function () {
    return view('menu.formulirPermintaan');
});

Route::get('akun', function () {
    return view('menu.akun');
});

Route::get('master', function () {
    return view('layout.master');
});

Route::get('layanan-bertarif', function () {
    return view('formulir.createLayananBertarif');
});

Route::resource('/bertarif', LayananbertarifController::class);