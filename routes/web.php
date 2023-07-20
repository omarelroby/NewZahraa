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
        return View('/home');
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
Route::namespace('App\Http\Controllers\dashboard')->group(function () {
    Route::get('/login','LoginController@get')->name('login');
    Route::post('login/post','LoginController@post')->name('login.post');
    Route::get('/logout','LoginController@logout')->name('logout');

});

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard','App\Http\Controllers\dashboard\HomeController@index');
    Route::get('/create','App\Http\Controllers\dashboard\HomeController@create');
    Route::get('/index','App\Http\Controllers\dashboard\HomeController@show');
    Route::resource('categories',\App\Http\Controllers\dashboard\CategoryController::class)
        ->names(['edit'=>'category.edit']);
    Route::resource('country',\App\Http\Controllers\dashboard\CountryController::class);
    Route::resource('ebook',\App\Http\Controllers\dashboard\EbookController::class);
    Route::resource('page',\App\Http\Controllers\dashboard\PagesController::class);
    Route::resource('freeVideos',\App\Http\Controllers\dashboard\FreeVideosController::class);
    Route::resource('setting',\App\Http\Controllers\dashboard\SettingController::class);
    Route::resource('instructors',\App\Http\Controllers\dashboard\InstructorController::class);
    Route::get('instructors-attachs/{id}',[\App\Http\Controllers\dashboard\InstructorController::class,'attachs']);
    Route::resource('customers',\App\Http\Controllers\dashboard\CustomersController::class);
    Route::resource('attachments',\App\Http\Controllers\dashboard\AttachmentsController::class);


});

