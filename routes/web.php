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

Route::get('/dashboard',function(){
    return view('user.dashboard.index');
});



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/buat_surat',function(){
    return view('user.buat_surat.create');
});
Route::get('/kelola_surat',function(){
    return view('user.kelola_surat.index');
});
Route::get('/kelola_surat/surat_lamaran',function(){
    return view('user.kelola_surat.child_kelola_surat.index');
});

Route::get('/profil_perusahaan',function(){
    return view('user.profil_perusahaan.index');
});

Route::get('/login',function(){
    return view('authentication.login');
});
