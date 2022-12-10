<?php

use App\Http\Controllers\InstructorDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorBackendController;

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
    return view('welcome');
});

//Admin Dashboard for admin and instructor
Route::resource('admin-dashboard', '\App\Http\Controllers\AdminDashboardController', ['names' => 'admin-dashboard']);
Route::get('learnnet',[UserDashboardController::class,'UserView'])->name('learnnet');
Route::get('profile',[UserDashboardController::class,'profileView'])->name('profile');



//Login
Route::post('loginCheck', [\App\Http\Controllers\LoginController::class, 'check'])->name('loginCheck');
Route::resource('login', '\App\Http\Controllers\LoginController',['names' => 'login']);

//Registration
Route::resource('register', '\App\Http\Controllers\RegisterController',['names' => 'register']);


/////Admin backend
Route::resource('create-admin', '\App\Http\Controllers\CreateAdminController');
Route::resource('admin-list', '\App\Http\Controllers\AdminListViewController');
Route::resource('students', '\App\Http\Controllers\StudentBackendController');
Route::resource('instructors', '\App\Http\Controllers\InstructorBackendController');
Route::resource('course-enroll-request', '\App\Http\Controllers\CourseEnrollRequestController');
Route::get('student-payment-aprroval{subscriber_id}', [\App\Http\Controllers\CourseEnrollRequestController::class, 'approve'])->name('student-payment-aprroval');
Route::get('student-payment-unaprroval{subscriber_id}', [\App\Http\Controllers\CourseEnrollRequestController::class, 'unapprove'])->name('student-payment-unaprroval');
Route::get('instructor-request',[\App\Http\Controllers\AdminController::class, 'instructorRequestView'])->name('instructor-request');
Route::get('instructor-approve{id}',[\App\Http\Controllers\AdminController::class, 'instructorApprove'])->name('instructor-approve');
Route::get('instructor-suspend{id}',[\App\Http\Controllers\AdminController::class, 'instructorSuspend'])->name('instructor-suspend');

/////Student
Route::resource('student-course', '\App\Http\Controllers\StudentCourseController');

/////Instructor
Route::resource('instructor-transaction','\App\Http\Controllers\InstructorTransactionController');
Route::resource('enrolled-courses', '\App\Http\Controllers\StudentEnrolledController');



//Course related
Route::resource('course', '\App\Http\Controllers\CourseController');
Route::resource('course-video', '\App\Http\Controllers\CourseVideoController');
Route::resource('course-list', '\App\Http\Controllers\CourseListController');
Route::resource('course-edit', '\App\Http\Controllers\CourseEditController', ['names' => 'course-edit']);
Route::resource('course-material', '\App\Http\Controllers\CourseMaterialController');

Route::get('course-material{id}',[\App\Http\Controllers\CourseMaterialController::class, 'index'])->name('course-material');
Route::get('course-view{id}',[\App\Http\Controllers\CourseMaterialController::class, 'viewCourse'])->name('course-view');
Route::get('course-edit{course_id}',[\App\Http\Controllers\CourseEditController::class, 'edit'])->name('course-edit');
Route::get('mat-delete{id}{course_id}',[\App\Http\Controllers\CourseEditController::class, 'destroy'])->name('mat-delete');
Route::get('course-delete{id}',[\App\Http\Controllers\CourseController::class, 'destroy'])->name('course-delete');
Route::get('course-video{id}',[\App\Http\Controllers\CourseVideoController::class, 'index'])->name('course-video');
Route::get('video-delete{id}{course_id}',[\App\Http\Controllers\CourseVideoController::class, 'destroy'])->name('video-delete');
Route::get('material-view{fileName}',[\App\Http\Controllers\CourseVideoController::class, 'matView'])->name('material-view');



//session control for login and logout
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//Course Video Play
Route::resource('video-play', '\App\Http\Controllers\CourseVideoPlayController', ['name' => 'video-play']);
Route::get('video-play{id}',[\App\Http\Controllers\CourseVideoPlayController::class,'view'])->name('video-play');
Route::get('video-show{video_id}',[\App\Http\Controllers\CourseVideoPlayController::class,'videoShow'])->name('video-show');

//User Payment
Route::get('payment{course}{videoId}', [\App\Http\Controllers\UserPaymentRequestController::class, 'view'])->name('payment');
Route::post('payment-request', [\App\Http\Controllers\UserPaymentRequestController::class, 'paymentRequest'])->name('payment-request');
