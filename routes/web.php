<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\User\UploadController as UserUploadController;
use App\Http\Controllers\Admin\UploadController as AdminUploadController;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\User\CommentController as UserCommentController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;

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

Route::get('/', [PageController::class,  'welcome'])->name('welcome');
Route::get('/about', [PageController::class,  'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/uploads', [App\Http\Controllers\HomeController::class, 'index'])->name('uploads');

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [UserHomeController::class, 'index'])->name('user.home');

Route::get('/user/uploads/', [UserUploadController::class, 'index'])->name('user.uploads.index');
Route::get('/user/uploads/create', [UserUploadController::class, 'create'])->name('user.uploads.create');
Route::get('/user/uploads/{id}', [UserUploadController::class, 'show'])->name('user.uploads.show');

Route::get('/admin/uploads/', [AdminUploadController::class, 'index'])->name('admin.uploads.index');
Route::get('/admin/uploads/create', [AdminUploadController::class, 'create'])->name('admin.uploads.create');
Route::get('/admin/uploads/{id}', [AdminUploadController::class, 'show'])->name('admin.uploads.show');
Route::post('/admin/uploads/store', [AdminUploadController::class, 'store'])->name('admin.uploads.store');
Route::get('/admin/uploads/{id}/edit', [AdminUploadController::class, 'edit'])->name('admin.uploads.edit');
Route::put('/admin/uploads/{id}', [AdminUploadController::class, 'update'])->name('admin.uploads.update');
Route::delete('/admin/uploads/{id}', [AdminUploadController::class, 'destroy'])->name('admin.uploads.destroy');

Route::get('/admin/uploads/{id}/comments/create', [AdminCommentController::class, 'create'])->name('admin.comments.create');
Route::post('/admin/uploads/{id}/comments/', [AdminCommentController::class, 'store'])->name('admin.comments.store');
Route::delete('/admin/uploads/{id}/comments/{rid}', [AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');

Route::get('/user/uploads/{id}/comments/create', [UserCommentController::class, 'create'])->name('user.comments.create');
Route::post('/user/uploads/{id}/comments/', [UserCommentController::class, 'store'])->name('user.comments.store');
