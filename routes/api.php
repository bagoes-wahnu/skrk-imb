<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkrkApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/skrk/json', [SkrkApiController::class,'json'])->name('skrk.json');
Route::get('/skrk/search_json', [SkrkApiController::class,'search_json'])->name('skrk.search.json');
Route::get('/skrk/show_json/{id_imb}', [SkrkApiController::class,'show_json'])->name('skrk.show.json');
Route::post('/skrk/store_json', [SkrkApiController::class,'store_json'])->name('skrk.store.json');
Route::delete('/skrk/delete_json/{id_imb}', [SkrkApiController::class,'delete_json'])->name('skrk.delete.json');