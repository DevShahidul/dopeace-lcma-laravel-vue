<?php

use App\Http\Controllers\NgoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ngos', [NgoController::class, 'index']);
Route::post('ngos', [NgoController::class, 'store']);
Route::get('ngos/{id}', [NgoController::class, 'show']);
Route::get('ngos/{id}/edit', [NgoController::class, 'edit']);
Route::put('ngos/{id}/edit', [NgoController::class, 'update']);
Route::delete('ngos/{id}/delete', [NgoController::class, 'destroy']);
