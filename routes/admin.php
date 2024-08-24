<?php

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DistrictController;
use App\Http\Controllers\backend\GeneralSettingController;
use App\Http\Controllers\backend\JobPostController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\RolePermissionController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\userController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::get('/', [DashboardController::class, 'index'])->name('index');




// rolls & permission ui
Route::resource('/role', RolePermissionController::class);


// category
Route::resource('/category', CategoryController::class)->names('category');
Route::resource('/subcategory', SubcategoryController::class)->names('subcategory');
Route::resource('/district', DistrictController::class)->names('district');

//post
Route::resource('/post', PostController::class)->names('post');
Route::get('/post/comment/{id}', [PostController::class, 'comment'])->name('post.comment');
Route::get('/post/comment/edit/{id}', [PostController::class, 'comment_edit'])->name('post.comment_edit');
Route::put('/post/comment/update/{id}', [PostController::class, 'comment_update'])->name('post.comment_update');
Route::DELETE('/post/comment/comment_destroy/{id}', [PostController::class, 'comment_destroy'])->name('post.comment_destroy');



//system settings
Route::get('/system-settings/{category}', [GeneralSettingController::class, 'index'])->name('system-setting.index');

Route::post('/system-settings/{category}', [GeneralSettingController::class, 'update'])->name('system-setting.update');

Route::resource('/banner', BannerController::class)->names('banner');


//job-post
Route::resource('/job-post', JobPostController::class)->names('job-post');
Route::resource('/report', ReportController::class)->names('report');
Route::get('/apply-jobs/list', [JobPostController::class, 'index1'])->name('apply-jobs.list');
Route::get('/apply-jobs/show/{id}', [JobPostController::class, 'show1'])->name('apply-jobs.show');
Route::delete('/apply-jobs/delete/{id}', [JobPostController::class, 'destroy1'])->name('apply-jobs.delete');





//admin & user manage
Route::resource('/admin-list', adminController::class)->names('admin-list');
Route::resource('/user-list', userController::class)->names('user-list');


