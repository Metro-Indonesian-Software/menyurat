<?php

use App\Http\Controllers\Auth\UpdatePasswordController;
use App\Http\Controllers\CommonLetterLogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get("/", [LandingPageController::class, "index"])->name("landing-page");

Auth::routes(["register" => false]);

Route::middleware(["auth", "prevent_back"])->group(function() {
    Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
    Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::put("/password/update", [UpdatePasswordController::class, "update"])->name("password.update");
});

Route::middleware(["auth", "prevent_back", "completed_profile"])->group(function() {
    Route::get("/dashboard", [HomeController::class, "dashboard"])->name("dashboard");

    Route::group(["middleware" => ["permission:users_manage"]], function() {
        Route::resource('user', UserController::class)->except("destroy");
    });

    Route::group(["middleware" => ["permission:letters_manage"]], function() {
        Route::get("/surat", [CommonLetterLogController::class, "index"])->name("letter.common.index");
        Route::get("/surat/{slug}", [CommonLetterLogController::class, "listIndex"])->name("letter.common.show");
        Route::post("/surat", [CommonLetterLogController::class, "store"])->name("letter.common.store");
    });
});

Route::get('/dashboard/buat_surat',function(){
    return view('user.buat_surat.create');
});
