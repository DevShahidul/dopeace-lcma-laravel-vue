<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/send-me-details', function (Request $request){
    $userKey = $request->input('user_key');
    if($userKey == '85978'){
        return response()->json([
            "user_info" => [
                "user_name" => "M Ibrahim",
                "designation" => "Full Stack Enginner",
                "mobile" => "12345667890",
                "bank_acc" => "12345567887654333"
            ]
        ], 200);
    }else{
        return response()->json([
            "message" => "Provide valid secret key"
        ], 404);
    }
});

require __DIR__.'/auth.php';
