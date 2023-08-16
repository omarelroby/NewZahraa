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


Route::post('login',[\App\Http\Controllers\api\CustomerController::class,'login']);

Route::middleware("localization")->group(function () {
    Route::middleware('auth:api')->group( function () {
        Route::post('update-profile',[\App\Http\Controllers\api\CustomerController::class,'update_profile']);
        Route::post('favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'favourite_ebooks']);
        Route::post('favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'favourite_videos']);
        Route::post('delete-favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_ebooks']);
        Route::post('favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'favourite_free_videos']);
        Route::post('delete-favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_free_videos']);
        Route::post('delete-favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_videos']);
        Route::post('favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'favourite_online_courses']);
        Route::post('delete-favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_online_courses']);
        Route::get('favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_ebooks']);
        Route::get('favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_free_videos']);
        Route::get('favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_videos']);
        Route::get('favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_online_courses']);
        Route::get('customer-logout',[\App\Http\Controllers\api\CustomerController::class,'logout']);
        Route::post('buy-ebook',[\App\Http\Controllers\api\CustomerController::class,'buy_ebook']);

    });
    Route::get('get-ebooks/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_ebooks']);
    Route::get('get-free-videos/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_free_videos']);
    Route::get('get-videos/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_videos']);
    Route::get('get-online-courses/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_online_courses']);
    Route::get('get-instructor/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_instructor']);
    Route::get('get-course/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_course']);
    Route::get('get-page/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_pages']);
    Route::get('course-category',[\App\Http\Controllers\api\HomeController::class,'course_category']);
    Route::get('free-video-category',[\App\Http\Controllers\api\HomeController::class,'free_video_category']);
    Route::get('online-course-category',[\App\Http\Controllers\api\HomeController::class,'online_course_category']);
    Route::get('ebook-category',[\App\Http\Controllers\api\HomeController::class,'Ebooks']);

    Route::get('countries', [\App\Http\Controllers\api\HomeController::class, 'countries']);
    Route::get('categories', [\App\Http\Controllers\api\HomeController::class, 'categories']);
    Route::post('lecturer', [\App\Http\Controllers\api\HomeController::class, 'lecturer']);
    Route::post('customer/register', [\App\Http\Controllers\api\CustomerController::class, 'customer_register']);
    Route::get('ebooks', [\App\Http\Controllers\api\HomeController::class, 'eBook']);
    Route::get('courses', [\App\Http\Controllers\api\HomeController::class, 'courses']);
    Route::get('videos', [\App\Http\Controllers\api\HomeController::class, 'videos']);
    Route::get('pages', [\App\Http\Controllers\api\HomeController::class, 'pages']);
    Route::get('free-videos', [\App\Http\Controllers\api\HomeController::class, 'free_videos']);
    Route::get('home-section', [\App\Http\Controllers\api\HomeController::class, 'home_section']);
    Route::get('setting', [\App\Http\Controllers\api\HomeController::class, 'setting']);
    Route::get('online-courses', [\App\Http\Controllers\api\HomeController::class, 'online_courses']);
    Route::get('questions', [\App\Http\Controllers\api\HomeController::class, 'questions']);
    Route::get('instructors', [\App\Http\Controllers\api\HomeController::class, 'instructors']);
    Route::get('instructor-online-courses', [\App\Http\Controllers\api\InstructorController::class, 'instructor_onlineCourses']);
    Route::post('instructor-groups', [\App\Http\Controllers\api\InstructorController::class, 'groups']);
    Route::post('materials', [\App\Http\Controllers\api\InstructorController::class, 'materials']);
    Route::post('quizes', [\App\Http\Controllers\api\InstructorController::class, 'quizes']);
    Route::post('quiz-questions', [\App\Http\Controllers\api\InstructorController::class, 'quiz_questions']);
    Route::delete('delete-materials/{id}', [\App\Http\Controllers\api\InstructorController::class, 'delete_materials']);
    Route::delete('delete-quiz/{id}', [\App\Http\Controllers\api\InstructorController::class, 'delete_quiz']);
    Route::get('online-course-group/{id}', [\App\Http\Controllers\api\InstructorController::class, 'online_courses_groups']);
    Route::post('contact', [\App\Http\Controllers\api\HomeController::class, 'contact']);
    Route::get('instructor-logout',[\App\Http\Controllers\api\InstructorController::class,'logout']);

});
