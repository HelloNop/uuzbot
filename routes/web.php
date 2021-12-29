<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('landing.landing');
});

// group routing admin
Route::middleware(['auth', 'cekRole:admin'])->group(function () {
    Route::get('add-panduan', function () {
        return view('admin.add-panduan');
    });
    Route::get('list-panduan', function () {
        return view('admin.list-panduan');
    });

    Route::get('sinyal', function () {
        return view('admin.sinyal');
    });

    Route::get('user-list', function () {
        return view('admin.user-list');
    });

    Route::get('market', function () {
        return view('admin.market');
    });
});


Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'cekRole:vip,admin'])->name('dashboard');
Route::get('/upgrade', function () { return view('upgrade'); })->middleware(['auth', 'cekRole:user,admin'])->name('upgrade');
Route::get('belajar-trading', function () {return view('belajar-trading');})->middleware('auth');
