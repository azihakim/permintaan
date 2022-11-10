<?php

use App\Http\Controllers\LayananbertarifController;
use App\Http\Controllers\KeagamaanController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DashboarduserController;
use App\Http\Controllers\PertahanankeamananController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PenanggulanganbencanaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResponlayananbertarifController;

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

Route::get('kegiatan-pendidikan', function () {
    return view('formulir.createPendidikan');
});

Route::get('kegiatan-penanggulangan-bencana', function () {
    return view('formulir.createPenanggulanganBencana');
});

Route::get('kegiatan-sosial', function () {
    return view('formulir.createSosial');
});

Route::get('kegiatan-keagamaan', function () {
    return view('formulir.createKeagamaan');
});



Route::get('kegiatan-pemerintahan', function () {
    return view('formulir.createPemerintahan');
});

Route::get('kegiatan-pertahanan-keamanan', function () {
    return view('formulir.createPertahanankeamanan');
});

// Route::get('dashboard', function () {
//     return view('menu.dashboarduser');
// });

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

Route::get('ubah', function () {
    return view('formulir.editLayananBertarif');
});

Route::resource('/bertarif', LayananbertarifController::class);

Route::resource('/keagamaan', KeagamaanController::class);

Route::resource('/dashboard', DashboarduserController::class);

Route::get('/dashboard',[DashboarduserController::class, 'index'])->name('dashboarduser');

Route::resource('/respon-bertarif', ResponlayananbertarifController::class);

Route::resource('/pendidikan', PendidikanController::class);

Route::resource('/sosial', SosialController::class);

Route::resource('/pertahanankeamanan', PertahanankeamananController::class);

Route::resource('/pemerintahan', PemerintahanController::class);

Route::resource('/penanggulanganbencana', PenanggulanganbencanaController::class);