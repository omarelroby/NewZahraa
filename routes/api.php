<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware("localization")->group(function () {
    Route::get('countries', [\App\Http\Controllers\api\HomeController::class, 'countries']);
    Route::get('categories', [\App\Http\Controllers\api\HomeController::class, 'categories']);
    Route::post('lecturer', [\App\Http\Controllers\api\HomeController::class, 'lecturer']);
    Route::post('customer/register', [\App\Http\Controllers\api\CustomerController::class, 'customer_register']);
    Route::get('ebooks', [\App\Http\Controllers\api\HomeController::class, 'eBook']);
});
