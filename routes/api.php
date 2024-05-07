<?php

use App\Http\Controllers\Api\GeograpicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get("/geographic/{province}/region", [GeograpicController::class, "getRegion"])->name("api.region.get");
Route::get("/geographic/{region}/district", [GeograpicController::class, "getDistrict"])->name("api.district.get");
Route::get("/geographic/{district}/urban-village", [GeograpicController::class, "getUrbanVillage"])->name("api.urban-village.get");
// TODO TEST: untuk tes saja, kalau sudah selesai jgn lupa dihapus/comment
// Route::post("/surat/{commonLetterLog}/input", [LetterLogController::class, "store"])->name("api.letter.log.store");
