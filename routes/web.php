<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\LayananbertarifController;
use App\Http\Controllers\KeagamaanController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DashboarduserController;
use App\Http\Controllers\ListuserController;
use App\Http\Controllers\PertahanankeamananController;
use App\Http\Controllers\PemerintahanController;
use App\Http\Controllers\PenanggulanganbencanaController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UsermasyarakatController;
// use App\Http\Controllers\UsermasyarakatController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
// Route::resource('/dashboard', DashboarduserController::class)->middleware(['auth', 'verified']);

// Route::get('/dashboard',[DashboarduserController::class, 'index'])->name('dashboarduser')->middleware(['auth', 'verified']);

Route::resource('/respon-bertarif', ResponController::class)->middleware(['auth', 'verified']);

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

// Route::get('yes', function () {
//     return view('user.logIn');
// });



Route::resource('/pembayaran', PembayaranController::class)->middleware(['auth', 'verified'] );


Route::get('signup', function () {
    return view('user.signup');
});

Route::get('akun', function () {
    return view('menu.akun');
})->name('akun.user')->middleware(['auth', 'verified']);


Auth::routes(['verify'=>true]);
// Admin
Route::middleware(['auth','cekrole:Super Admin'])->group(function()
{
// Dashboard
    Route::get('/dashboard-superadmin', [ListuserController::class, 'index'])->name('dashboard.sa');
    // Route::get('/dashboard-superadmin',[DashboardadminController::class, 'index'])->name('dashboard.sa');
    Route::delete('/users/{id}', [AddUserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware(['auth','cekrole:Admin'])->group(function()
{
// Dashboard
    // Route::resource('/admin', DashboardadminController::class);
    Route::get('/dashboard-admin',[DashboardadminController::class, 'index'])->name('dashboard.admin');
    Route::resource('/respon', ResponController::class);
// Route::resource('respon-layanan', [ResponController::class])->middleware(['auth', 'verified'] );
});
Route::middleware(['auth','cekrole:Viewer'])->group(function()
{
// Dashboard
    // Route::resource('/admin', DashboardadminController::class);
    Route::get('/dashboard-viewer',[DashboardadminController::class, 'index'])->name('dashboard.viewer');
// Route::resource('respon-layanan', [ResponController::class])->middleware(['auth', 'verified'] );
});

Route::get('/', function () {
    return view('auth.login');
})->name('/');

Route::get('/login-agromet', function () {
    return view('auth.login-agromet');
})->name('/');


Route::middleware(['auth', 'verified','cekrole:Masyarakat'])->group(function()
{
// Dashboard
    Route::resource('/dashboard', DashboarduserController::class);

    Route::get('/dashboard',[DashboarduserController::class, 'index'])->name('dashboard.user');
});

// edit user
Route::resource('/edit-user', UsermasyarakatController::class);
Route::get('/akun', [UsermasyarakatController::class, 'index'])->name('akun.user');

//  Super admin
Route::resource('/list-user', ListuserController::class);
Route::get('/list-user', [ListuserController::class, 'index'])->name('list.user');
Route::resource('/add-user', AddUserController::class);

Route::resource('/keagamaan', KeagamaanController::class);

// Route::middleware(['auth','cekrole:Observer'])->group(function()
// {
//     Route::get('pencatatan-agromet', function () {
//         return view('pencatatan.agromet');
//     })->name('pencatatan-agromet');

//     Route::get('pencatatan-angin-10m-24jam', function () {
//         return view('pencatatan.angin-10m-24jam');
//     });

//     Route::get('pencatatan-lama-penyinaran', function () {
//         return view('pencatatan.lama-penyinaran');
//     });

//     Route::get('pencatatan-lysimeter', function () {
//         return view('pencatatan.lysimeter');
//     });

//     Route::get('pencatatan-dashboard', function () {
//         return view('pencatatan.dashboard');
//     });
// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
