<?php

use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\LayananbertarifController;
use App\Http\Controllers\KeagamaanController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DashboarduserController;
use App\Http\Controllers\PertahanankeamananController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PenanggulanganbencanaController;
use App\Http\Controllers\ResponlayananbertarifController;
use App\Http\Controllers\PembayaranController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/dashboard', DashboarduserController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard',[DashboarduserController::class, 'index'])->name('dashboarduser')->middleware(['auth', 'verified']);

Route::resource('/respon-bertarif', ResponlayananbertarifController::class)->middleware(['auth', 'verified']);

// layanan bertarif
Route::resource('/bertarif', LayananbertarifController::class)->middleware(['auth', 'verified']);
Route::get('layanan-bertarif', function () {
    return view('formulir.createLayananBertarif');
});
Route::resource('/pembayaran', PembayaranController::class)->middleware(['auth', 'verified']);

// kegiatan keagamaan
Route::resource('/keagamaan', KeagamaanController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-keagamaan', function () {
    return view('formulir.createKeagamaan');
});

// Pendidikan 
Route::resource('/pendidikan', PendidikanController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-pendidikan', function () {
    return view('formulir.createPendidikan');
});

// kegiatan sosial
Route::resource('/sosial', SosialController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-sosial', function () {
    return view('formulir.createSosial');
});

// kegiatan pertahanan keamanan
Route::resource('/pertahanankeamanan', PertahanankeamananController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-pertahanan-keamanan', function () {
    return view('formulir.createPertahanankeamanan');
});

// kegiatan pemerintahan
Route::resource('/pemerintahan', PemerintahanController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-pemerintahan', function () {
    return view('formulir.createPemerintahan');
});

// kegiatan penanggulangan bencana
Route::resource('/penanggulanganbencana', PenanggulanganbencanaController::class)->middleware(['auth', 'verified']);
Route::get('kegiatan-penanggulangan-bencana', function () {
    return view('formulir.createPenanggulanganBencana');
});

Route::get('yes', function () {
    return view('user.logIn');
});



Route::resource('/pembayaran', PembayaranController::class)->middleware(['auth', 'verified'] );


Route::get('signup', function () {
    return view('user.signup');
});

Route::get('akun', function () {
    return view('menu.akun');
})->middleware(['auth', 'verified']);

// Admin

// Dashboard 
Route::resource('/dashboard-admin', DashboardadminController::class);

Route::resource('/respon', ResponlayananbertarifController::class);
// Route::resource('respon-layanan', [ResponlayananbertarifController::class])->middleware(['auth', 'verified'] );
