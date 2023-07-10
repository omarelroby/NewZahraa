<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group([
    'as' => 'passport.',
    'prefix' => config('passport.path', 'oauth'),
    'namespace' => '\Laravel\Passport\Http\Controllers',
], function () {
    // Passport routes...
});
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return View::make('hello');
    });


    Route::get('test',function(){
        return View::make('test');
    });
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard','App\Http\Controllers\dashboard\HomeController@index');
Route::get('/create','App\Http\Controllers\dashboard\HomeController@create');
Route::get('/index','App\Http\Controllers\dashboard\HomeController@show');
Route::resource('categories',\App\Http\Controllers\dashboard\CategoryController::class)
->names(['edit'=>'category.edit']);
Route::resource('country',\App\Http\Controllers\dashboard\CountryController::class);
Route::resource('ebook',\App\Http\Controllers\dashboard\EbookController::class);
Route::resource('pages',\App\Http\Controllers\dashboard\PagesController::class);
Route::resource('freeVideos',\App\Http\Controllers\dashboard\FreeVideosController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
