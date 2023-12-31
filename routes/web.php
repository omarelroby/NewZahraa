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



    Route::get('test',function(){
        return View::make('test');
    });
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

Route::namespace('App\Http\Controllers\dashboard')->group(function () {
    Route::get('/login','LoginController@get')->name('login');
    Route::post('login/post','LoginController@post')->name('login.post');
    Route::get('/logout','LoginController@logout')->name('logout');

});

Route::middleware('auth:admin')->group(function () {
    Route::get('/','App\Http\Controllers\dashboard\HomeController@index')->name('home');
    Route::get('/dashboard','App\Http\Controllers\dashboard\HomeController@index')->name('dashboard');
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
     Route::get('online-course-groups/{id}',[\App\Http\Controllers\dashboard\OnlineCourseGroupsController::class,'index'])->name('onlineCourse.groups');
     Route::get('online-course-quizes/{id}',[\App\Http\Controllers\dashboard\OnlineCourseQuizController::class,'index'])->name('onlineCourse.quiz');
     Route::resource('online-course-quiz',\App\Http\Controllers\dashboard\OnlineCourseQuizController::class );
     Route::get('online-course-quiz-create/{id}',[\App\Http\Controllers\dashboard\OnlineCourseQuizController::class,'create'])->name('quiz.create');
     Route::get('get-group/{id}',[\App\Http\Controllers\dashboard\OnlineCourseQuizController::class,'get_group'])->name('get.group');
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
     Route::delete('end-index-delete/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'end_index_delete'])->name('delete-index');
     Route::delete('/index-video-delete/{id}',[\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class,'destroy'])->name('delete-videos-index');
     Route::delete('online-course-index-delete/{id}',[\App\Http\Controllers\dashboard\OnlineCourseIndexController::class,'destroy'])->name('online-course-delete-index');
     Route::get('indexes/{id}',[\App\Http\Controllers\dashboard\IndexesController::class,'index']);
     Route::get('group-attachments/{id}',[\App\Http\Controllers\dashboard\MaterialGroupController::class,'index']);
     Route::get('quizes/{id}',[\App\Http\Controllers\dashboard\ShowQuizController::class,'index']);
     Route::get('index-videos/{id}',[\App\Http\Controllers\dashboard\IndexVideosController::class,'index']);
     Route::get('indexes-videos/{id}',[\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class,'index'])->name('indexes-videos');
     Route::resource('indexes-videos',\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class);
     Route::resource('ebook-orders',\App\Http\Controllers\dashboard\EbookOrdersController::class);
     Route::resource('course-orders',\App\Http\Controllers\dashboard\CourseOrdersController::class);
     Route::resource('online-course-orders',\App\Http\Controllers\dashboard\OnlineCourseOrdersController::class);
     Route::resource('coupon',\App\Http\Controllers\dashboard\CouponController::class);
     Route::resource('appointments',\App\Http\Controllers\dashboard\AppointmentsController::class);
     Route::resource('booking-appointments',\App\Http\Controllers\dashboard\BookingAppointmentsController::class);
     Route::resource('employment',\App\Http\Controllers\dashboard\EmploymentController::class);
     Route::get('create-indexes-videos/{id}',[\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class,'create']);
     Route::post('store-indexes-videos',[\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class,'store']);
     Route::put('update-indexes-videos/{id}',[\App\Http\Controllers\dashboard\IndexOfIndexVideosController::class,'update'])->name('update.index.videos');
     Route::get('send-emails',[\App\Http\Controllers\dashboard\SendEmailsController::class,'index'])->name('send-emails.index');
      Route::post('sending-emails',[\App\Http\Controllers\dashboard\SendEmailsController::class,'sending_emails'])->name('send.emails');
    Route::get('applyJob', [\App\Http\Controllers\api\ApplyJobController::class,'index'])->name('applyJob');
    Route::delete('applyJob/{id}', [\App\Http\Controllers\api\ApplyJobController::class,'destroy'])->name('deleteJob');
    Route::get('subscriptions', [\App\Http\Controllers\HomeController::class,'subscriptions'])->name('subscriptions');
    Route::get('withdraw', [\App\Http\Controllers\HomeController::class,'withdraw'])->name('withdraw.index');
    Route::delete('delete-subscriptions/{id}', [\App\Http\Controllers\HomeController::class,'delete_subscription'])->name('delete.subscription');
    Route::get('accept-request/{id}', [\App\Http\Controllers\dashboard\InstructorRequestsController::class,'accept_request'])->name('accept_request');
    Route::resource('payment-method', \App\Http\Controllers\dashboard\PaymentMethodsController::class);
    Route::resource('popups', \App\Http\Controllers\dashboard\PopupController::class);
    Route::resource('template', \App\Http\Controllers\dashboard\TemplateController::class);
    Route::get('popup/{id}', [\App\Http\Controllers\dashboard\PopupController::class,'index'])->name('popup.index');
    Route::get('popup-create/{id}', [\App\Http\Controllers\dashboard\PopupController::class,'create'])->name('popup.create');
    Route::post('popup-store', [\App\Http\Controllers\dashboard\PopupController::class,'store'])->name('popup.store');
    Route::get('import-countries', [\App\Http\Controllers\dashboard\HomeController::class,'import_country']);

});

});
