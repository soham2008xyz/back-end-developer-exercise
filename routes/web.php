<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontedController;
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
/****************************************ADMIN ROUTES START *************************/
Route::group([
    'middleware'=>['auth'],
    'prefix'=> '{locale}',
    'where'=> ['locale'=>'admin']
],function () {
    Route::get('/dashboard', [AdminController::class,'getDashboard']);
    Route::get('/', function(){return redirect('/admin/dashboard');});
    Route::get('/add-blog', [BlogController::class,'addBlog']);
    Route::get('/edit-blog/{id}', [BlogController::class,'editBlog']);
    Route::post('/addblog-handle', [BlogController::class,'handleaddBlog']);
    Route::post('/editblog-handle/{id}', [BlogController::class,'handleditBlog']);
    Route::get('/delete-blog/{id}', [BlogController::class,'deleteBlog']);
    Route::get('/logout', [AdminController::class,'adminLogout']);
});


Route::group([
    'prefix'=> '{locale}',
    'where'=> ['locale'=>'admin']
],function () {
    Route::get('/login', [AdminController::class,'adminLogin'])->name('login');
    Route::get('/signup', [AdminController::class,'adminSignup']);
    Route::post('/add-users', [AdminController::class,'addAdminUser']);
    Route::post('/login-handle', [AdminController::class,'handleLogin']);    
});

Route::get('/',[FrontedController::class,'home']);
Route::get('/home',[FrontedController::class,'home']);
Route::get('/blog-details/{username}/{slug}/{id}',[FrontedController::class,'blogDetails']);