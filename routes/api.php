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



Route::middleware("localization")->group(function ()
{
    Route::post('login',[\App\Http\Controllers\api\CustomerController::class,'login']);

    Route::middleware('auth:api')->group( function ()
    {
        Route::post('update-profile',[\App\Http\Controllers\api\CustomerController::class,'update_profile']);
        Route::post('favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'favourite_ebooks']);
        Route::post('favourite-course',[\App\Http\Controllers\api\CustomerController::class,'favourite_course']);
        Route::post('favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'favourite_videos']);
        Route::post('delete-favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_ebooks']);
        Route::post('favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'favourite_free_videos']);
        Route::post('delete-favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_free_videos']);
        Route::post('delete-favourite-courses',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_courses']);
        Route::post('delete-favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_videos']);
        Route::post('favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'favourite_online_courses']);
        Route::post('delete-favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'delete_favourite_online_courses']);
        Route::get('favourite-ebooks',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_ebooks']);
        Route::get('favourite-courses',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_courses']);
        Route::get('favourite-free-videos',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_free_videos']);
        Route::get('favourite-videos',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_videos']);
        Route::get('favourite-online-courses',[\App\Http\Controllers\api\CustomerController::class,'show_favourite_online_courses']);
        Route::get('customer-logout',[\App\Http\Controllers\api\CustomerController::class,'logout']);
        Route::post('buy-ebook',[\App\Http\Controllers\api\CustomerController::class,'buy_ebook']);
        Route::post('buy-course',[\App\Http\Controllers\api\CustomerController::class,'buy_course']);
        Route::get('customer-ebook-orders',[\App\Http\Controllers\api\CustomerController::class,'customer_ebook_orders']);
        Route::get('customer-course-orders',[\App\Http\Controllers\api\CustomerController::class,'customer_course_orders']);
        Route::get('customer-online-courses-orders',[\App\Http\Controllers\api\CustomerController::class,'customer_online_courses_orders']);
        Route::post('online-course-orders',[\App\Http\Controllers\api\CustomerController::class,'online_course_orders']);
        Route::get('get-online-course-orders',[\App\Http\Controllers\api\CustomerController::class,'get_online_course_orders']);
        Route::get('get-quiz',[App\Http\Controllers\api\CustomerController::class,'get_quiz']);

    });

    Route::middleware('auth:instructor-api')->group( function ()
    {
        Route::get('instructor-online-courses', [\App\Http\Controllers\api\InstructorController::class, 'instructor_onlineCourses']);
        Route::get('get-group-appointment', [\App\Http\Controllers\api\InstructorController::class, 'get_group_appointments']);
        Route::get('instructor-logout',[\App\Http\Controllers\api\InstructorController::class,'logout']);
        Route::post('instructor-groups', [\App\Http\Controllers\api\InstructorController::class, 'groups']);
        Route::post('materials', [\App\Http\Controllers\api\InstructorController::class, 'materials']);
        Route::post('quizes', [\App\Http\Controllers\api\InstructorController::class, 'quizes']);
        Route::delete('delete-materials/{id}', [\App\Http\Controllers\api\InstructorController::class, 'delete_materials']);
        Route::delete('delete-quiz/{id}', [\App\Http\Controllers\api\InstructorController::class, 'delete_quiz']);
        Route::get('online-course-group/{id}', [\App\Http\Controllers\api\InstructorController::class, 'online_courses_groups']);
        Route::post('quiz-questions', [\App\Http\Controllers\api\InstructorController::class, 'quiz_questions']);
        Route::post('quiz-answers', [\App\Http\Controllers\api\InstructorController::class, 'quiz_answers'])->middleware('auth:api');
        Route::get('instructor-profile', [\App\Http\Controllers\api\InstructorController::class, 'instructor_profile'])->middleware('auth:api');



    });

    Route::get('get-ebooks/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_ebooks']);
    Route::get('get-ebooks-related/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_ebooks_related']);
    Route::get('get-free-videos/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_free_videos']);
    Route::get('get-free-videos-related/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_free_videos_related']);
    Route::get('get-videos/{id}',[\App\Http\Controllers\api\CustomerController::class,'get_videos']);
    Route::get('get-online-courses/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_online_courses']);
    Route::get('get-online-courses-related/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_online_courses_related']);
    Route::get('get-instructor/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_instructor']);
    Route::get('get-course/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_course']);
    Route::get('get-course-related/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_course_related']);
    Route::get('get-page/{slug}',[\App\Http\Controllers\api\CustomerController::class,'get_pages']);
    Route::get('course-category',[\App\Http\Controllers\api\HomeController::class,'course_category']);
    Route::get('free-video-category',[\App\Http\Controllers\api\HomeController::class,'free_video_category']);
    Route::get('online-course-category',[\App\Http\Controllers\api\HomeController::class,'online_course_category']);
    Route::get('ebook-category',[\App\Http\Controllers\api\HomeController::class,'Ebooks']);

    Route::get('countries', [\App\Http\Controllers\api\HomeController::class, 'countries']);
    Route::get('employments', [\App\Http\Controllers\api\HomeController::class, 'employments']);
    Route::get('get-employment-application/{slug}', [\App\Http\Controllers\api\HomeController::class, 'get_employment_application']);
    Route::post('apply-job', [\App\Http\Controllers\api\ApplyJobController::class, 'store']);
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
    Route::post('contact', [\App\Http\Controllers\api\HomeController::class, 'contact']);
    Route::get('appointments-month/{id}',[\App\Http\Controllers\api\HomeController::class,'appointments']);
    Route::post('booking-appointments',[\App\Http\Controllers\api\HomeController::class,'booking_appointments']);
    Route::get('courses-videos/{course_id}',[\App\Http\Controllers\api\CustomerController::class,'courses_videos']);
    Route::post('subscription',[\App\Http\Controllers\api\HomeController::class,'subscription']);
    Route::get('payment-method',[\App\Http\Controllers\api\HomeController::class,'payment_methods']);
    Route::post('forget-password',[\App\Http\Controllers\api\CustomerController::class,'forget_password']);
    Route::post('reset-password',[\App\Http\Controllers\api\CustomerController::class,'reset_password']);
    Route::get('dates-instructors',[\App\Http\Controllers\api\CustomerController::class,'instructor_dates']);
    Route::post('get-session-dates',[\App\Http\Controllers\api\HomeController::class,'get_session_dates']);
    Route::get('pay',[\App\Http\Controllers\api\CustomerController::class,'pay']);
    Route::get('redirect',[\App\Http\Controllers\api\CustomerController::class,'redirect_payment']);
    Route::get('redirect-course',[\App\Http\Controllers\api\CustomerController::class,'redirect_payment_course']);
    Route::get('redirect-online-course',[\App\Http\Controllers\api\CustomerController::class,'redirect_payment_online_course']);
    Route::get('redirect-booking',[\App\Http\Controllers\api\HomeController::class,'redirect_booking']);
    Route::get('error_payment',[\App\Http\Controllers\api\CustomerController::class,'error_payment']);

});
