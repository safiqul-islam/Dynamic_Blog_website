<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogSubCategoryController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ArticlController;
use App\Http\Controllers\Front\FrontController;
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

//frontend route start

Route::get('/',[FrontController::class,'home'])->name('home');
Route::get('contact',[FrontController::class,'contact'])->name('contact');
Route::get('/article_details/{slug}',[FrontController::class,'articleDetails'])->name('article_details');
Route::get('/service_details/{slug}',[FrontController::class,'serviceDetails'])->name('service_details');
Route::get('/categorywiseblogs/{id}',[FrontController::class,'categoryBlogs'])->name('categorywiseblogs');

//frontend route ends





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//blog category route-------------------------------->

    Route::get('/add_blog_category',[BlogCategoryController::class,'add_category'])->name('add_blog_category');
    Route::post('/new_blog_category',[BlogCategoryController::class,'new_category'])->name('new_blog_category');
    Route::get('/manage_blog_category',[BlogCategoryController::class,'manage_category'])->name('manage_blog_category');
    Route::get('/edit_blog_category/{id}',[BlogCategoryController::class,'edit_category'])->name('edit_blog_category');
    Route::post('/update_blog_category/{id}',[BlogCategoryController::class,'update_category'])->name('update_blog_category');
    Route::get('/delete_blog_category/{id}',[BlogCategoryController::class,'delete_category'])->name('delete_blog_category');



//blog Sub category route-------------------------------->
    Route::resource('blog-sub-categories',BlogSubCategoryController::class);
//Blogs route-------------------------------------------->
    Route::resource('blogs',BlogsController::class);
//Ajax route--------------------------------------------->
    Route::get('/get-sub-category-by-category-id/{id}', [BlogsController::class,'getSubCategory'])->name('get-sub-categories-by-category-id');
//service route-------------------------------------------->
    Route::resource('services',ServiceController::class);
//Article route-------------------------------------------->
    Route::resource('articles',ArticlController::class);


});
