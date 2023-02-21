<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    TanggapanController,
    PengaduanController,
    LoginController,
    DashboardController,
    RegisterController
};


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

Route::resource('pengaduan', PengaduanController::class)->middleware(['auth', 'level:masyarakat,admin,petugas']);

Route::get('login', [LoginController::class , 'view'])->name('login')->middleware('guest');
Route::get('forgot', [LoginController::class , 'forgot'])->name('forgot')->middleware('guest');
Route::post('login', [LoginController::class,'proses'])->name('login.proses')->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])->name('logout.petugas');


Route::get('register', [RegisterController::class, 'view'])->name('register')->middleware(('guest'));
Route::post('register', [RegisterController::class, 'store'])->name('register-store')->middleware(('guest'));

Route::get('pengaduan/{pengaduan}/tanggapan', [TanggapanController::class, 'create'])->name('tanggapan.create');
Route::post('pengaduan/{pengaduan}', [TanggapanController::class, 'store'])->name('tanggapan.store');

Route::middleware(['auth', 'level:admin'])->group(function () {
    Route::get('/dashboard/admin',[DashboardController::class,'admin'])->name('dashboard.admin');
});

Route::middleware(['auth', 'level:petugas'])->group(function () {
    Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('dashboard.petugas');
});

Route::middleware(['auth', 'level:masyarakat'])->group(function () {
    Route::get('/dashboard/masyarakat', [DashboardController::class, 'masyarakat'])->name('dashboard.masyarakat');
});

Route::view('error/403', 'error.403')->name('error.403');
