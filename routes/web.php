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
    Route::resource('courses',\App\Http\Controllers\dashboard\CoursesController::class);
    Route::resource('home-section',\App\Http\Controllers\dashboard\HomeSectionController::class);
    Route::resource('online-courses',\App\Http\Controllers\dashboard\OnlineCoursesController::class);
    Route::resource('question',\App\Http\Controllers\dashboard\QuestionsController::class);
    Route::resource('instructor-requests',\App\Http\Controllers\dashboard\InstructorRequestsController::class);
    Route::resource('contacts',\App\Http\Controllers\dashboard\ContactsController::class);
    Route::resource('videos',\App\Http\Controllers\dashboard\VideosController::class);
//    Route::resource('index',\App\Http\Controllers\dashboard\IndexesController::class);
     Route::get('index/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'index'])->name('index.index');
     Route::get('online-course-indexes/{id}',[\App\Http\Controllers\dashboard\OnlineCourseIndexController::class,'index'])->name('onlineCourse.index');
     Route::get('videos-indexes/{id}',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'index'])->name('video-index.index');
     Route::get('index-create/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'create_index'])->name('indexes.create');
     Route::get('online-course-index-create/{id}',[\App\Http\Controllers\dashboard\OnlineCourseIndexController::class,'create_index'])->name('online-indexes.create');
     Route::get('video-index-create/{id}',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'create_video_index'])->name('video-indexes.create');
     Route::get('video-index-edit/{id}',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'edit'])->name('video-indexes.edit');
     Route::post('index-store',[\App\Http\Controllers\dashboard\IndexesController::class,'store'])->name('indexes.store');
     Route::post('online-course-index-store',[\App\Http\Controllers\dashboard\OnlineCourseIndexController::class,'store'])->name('online-course-indexes.store');
     Route::post('video-index-store',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'store'])->name('video-indexes.store');
     Route::put('video-index-update/{id}',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'update'])->name('update-video-index');
     Route::delete('video-index-delete/{id}',[\App\Http\Controllers\dashboard\VideoIndexesController::class,'destroy'])->name('delete-video-index');
     Route::delete('index-delete/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'destroy'])->name('delete-index');
     Route::delete('online-course-index-delete/{id}',[\App\Http\Controllers\dashboard\OnlineCourseIndexController::class,'destroy'])->name('online-course-delete-index');
    Route::get('indexes/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'index']);

});

