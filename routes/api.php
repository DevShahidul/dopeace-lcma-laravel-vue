<?php

use App\Http\Controllers\LearningCenterController;
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

//Route::get('ngos', [NgoController::class, 'index']);
//Route::post('ngos', [NgoController::class, 'store']);
//Route::get('ngos/{id}', [NgoController::class, 'getNgo']);
//Route::put('ngos/{id}', [NgoController::class, 'update']);
//Route::delete('ngos/{id}', [NgoController::class, 'destroy']);

Route::controller(NgoController::class)->group(function (){
    Route::get('/ngos', 'index')->name('getNgos'); // List of all ngos
    Route::post('/ngos', 'store')->name('createNgo'); // Create new ngo
    Route::get('ngos/{id}', 'show')->name('showNgo'); // Show single ngo
    Route::put('ngos/{id}', 'update')->name('editNgo'); // Edit & update ngo
    Route::delete('ngos/{id}', 'destroy')->name('deleteNgo'); // Delete ngo;
});

Route::controller(LearningCenterController::class)->group(function (){
   Route::get('/learning-centers', 'index')->name('getLearningCenter');
   Route::post('/learning-centers', 'store')->name('createLearningCenter');
   Route::get('/learning-centers/{id}', 'show')->name('showLearningCenter');
   Route::put('/learning-centers/{id}', 'update')->name('updateLearningCenter');
   Route::delete('/learning-centers/{id}', 'destroy')->name('deleteLearningCenter');
});
