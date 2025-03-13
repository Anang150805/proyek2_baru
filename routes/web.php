<?php
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', [RegisterUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterUserController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});



use App\Http\Controllers\DashboardController;

Route::middleware(['auth', 'admin'])->get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
Route::middleware(['auth', 'karyawan'])->get('/karyawan/dashboard', [DashboardController::class, 'karyawan'])->name('karyawan.dashboard');
Route::middleware(['auth'])->get('/user/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::middleware(['verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

use App\Http\Controllers\ProdukController;

Route::resource('produk', ProdukController::class);
Route::resource('pesanan', PesananController::class)->middleware('auth');
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk.index');

use App\Http\Controllers\KeranjangController;

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');

// Route untuk halaman produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

// Route untuk detail produk
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/tentang-kami', function () {
    return view('tentang');
})->name('tentang');

