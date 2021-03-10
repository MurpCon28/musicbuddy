<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\User\UploadController as UserUploadController;
use App\Http\Controllers\Admin\UploadController as AdminUploadController;

use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

use App\Http\Controllers\User\CommentController as UserCommentController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;

use App\Http\Controllers\User\FavouriteController as UserFavouriteController;
use App\Http\Controllers\Admin\FavouriteController as AdminFavouriteController;

use App\Http\Controllers\User\GigController as UserGigController;
use App\Http\Controllers\Admin\GigController as AdminGigController;

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
Route::post('/user/uploads/store', [UserUploadController::class, 'store'])->name('user.uploads.store');
Route::get('/user/uploads/{id}/edit', [UserUploadController::class, 'edit'])->name('user.uploads.edit');
Route::put('/user/uploads/{id}', [UserUploadController::class, 'update'])->name('user.uploads.update');
Route::delete('/user/uploads/{id}', [UserUploadController::class, 'destroy'])->name('user.uploads.destroy');

Route::get('/admin/uploads/', [AdminUploadController::class, 'index'])->name('admin.uploads.index');
Route::get('/admin/uploads/create', [AdminUploadController::class, 'create'])->name('admin.uploads.create');
Route::get('/admin/uploads/{id}', [AdminUploadController::class, 'show'])->name('admin.uploads.show');
Route::post('/admin/uploads/store', [AdminUploadController::class, 'store'])->name('admin.uploads.store');
Route::get('/admin/uploads/{id}/edit', [AdminUploadController::class, 'edit'])->name('admin.uploads.edit');
Route::put('/admin/uploads/{id}', [AdminUploadController::class, 'update'])->name('admin.uploads.update');
Route::delete('/admin/uploads/{id}', [AdminUploadController::class, 'destroy'])->name('admin.uploads.destroy');

Route::get('/admin/reviews/', [AdminUploadController::class, 'reviews'])->name('admin.reviews.index');
Route::get('/admin/reviews/{id}', [AdminUploadController::class, 'reviewshow'])->name('admin.reviews.show');
Route::get('/admin/covers/', [AdminUploadController::class, 'covers'])->name('admin.covers.index');
Route::get('/admin/covers/{id}', [AdminUploadController::class, 'covershow'])->name('admin.covers.show');
Route::get('/admin/lessons/', [AdminUploadController::class, 'lessons'])->name('admin.lessons.index');
Route::get('/admin/lessons/{id}', [AdminUploadController::class, 'lessonshow'])->name('admin.lessons.show');

Route::get('/user/reviews/', [UserUploadController::class, 'reviews'])->name('user.reviews.index');
Route::get('/user/reviews/{id}', [UserUploadController::class, 'reviewshow'])->name('user.reviews.show');
Route::get('/user/covers/', [UserUploadController::class, 'covers'])->name('user.covers.index');
Route::get('/user/covers/{id}', [UserUploadController::class, 'covershow'])->name('user.covers.show');
Route::get('/user/lessons/', [UserUploadController::class, 'lessons'])->name('user.lessons.index');
Route::get('/user/lessons/{id}', [UserUploadController::class, 'lessonshow'])->name('user.lessons.show');

Route::get('/admin/myvid/', [AdminUploadController::class, 'myvid'])->name('admin.myvid.index');
Route::get('/admin/myvid/{id}', [AdminUploadController::class, 'myvidshow'])->name('admin.myvid.show');
Route::get('/admin/mygig/', [AdminGigController::class, 'mygig'])->name('admin.mygig.index');
Route::get('/admin/mygig/{id}', [AdminGigController::class, 'mygigshow'])->name('admin.mygig.show');

Route::get('/user/myvid/', [UserUploadController::class, 'myvid'])->name('user.myvid.index');
Route::get('/user/myvid/{id}', [UserUploadController::class, 'myvidshow'])->name('user.myvid.show');
Route::get('/user/mygig/', [UserGigController::class, 'mygig'])->name('user.mygig.index');
Route::get('/user/mygig/{id}', [UserGigController::class, 'mygigshow'])->name('user.mygig.show');

Route::get('/admin/favourites/', [AdminFavouriteController::class, 'index'])->name('admin.favourites.index');
Route::post('/admin/uploads/{id}/favourites/', [AdminFavouriteController::class, 'store'])->name('admin.favourites.store');
Route::delete('/admin/favoutites/{id}', [AdminFavouriteController::class, 'destroy'])->name('admin.favourites.destroy');

Route::get('/user/favourites/', [UserFavouriteController::class, 'index'])->name('user.favourites.index');
Route::post('/user/uploads/{id}/favourites/', [UserFavouriteController::class, 'store'])->name('user.favourites.store');
Route::delete('/user/favoutites/{id}', [UserFavouriteController::class, 'destroy'])->name('user.favourites.destroy');

Route::get('/admin/uploads/{id}/comments/create', [AdminCommentController::class, 'create'])->name('admin.comments.create');
Route::post('/admin/uploads/{id}/comments/', [AdminCommentController::class, 'store'])->name('admin.comments.store');
Route::delete('/admin/uploads/{id}/comments/{rid}', [AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');

Route::get('/user/uploads/{id}/comments/create', [UserCommentController::class, 'create'])->name('user.comments.create');
Route::post('/user/uploads/{id}/comments/', [UserCommentController::class, 'store'])->name('user.comments.store');

Route::get('/user/gigs/', [UserGigController::class, 'index'])->name('user.gigs.index');
Route::get('/user/gigs/{id}', [UserGigController::class, 'show'])->name('user.gigs.show');
Route::get('/user/gigs.create', [UserGigController::class, 'create'])->name('user.gigs.create');
Route::post('/user/gigs/store', [UserGigController::class, 'store'])->name('user.gigs.store');
Route::get('/user/gigs/{id}/edit', [UserGigController::class, 'edit'])->name('user.gigs.edit');
Route::put('/user/gigs/{id}', [UserGigController::class, 'update'])->name('user.gigs.update');
Route::delete('/user/gigs/{id}', [UserGigController::class, 'destroy'])->name('user.gigs.destroy');

Route::get('/admin/gigs', [AdminGigController::class, 'index'])->name('admin.gigs.index');
Route::get('/admin/gigs.create', [AdminGigController::class, 'create'])->name('admin.gigs.create');
Route::get('/admin/gigs/{id}', [AdminGigController::class, 'show'])->name('admin.gigs.show');
Route::post('/admin/gigs/store', [AdminGigController::class, 'store'])->name('admin.gigs.store');
Route::get('/admin/gigs/{id}/edit', [AdminGigController::class, 'edit'])->name('admin.gigs.edit');
Route::put('/admin/gigs/{id}', [AdminGigController::class, 'update'])->name('admin.gigs.update');
Route::delete('/admin/gigs/{id}', [AdminGigController::class, 'destroy'])->name('admin.gigs.destroy');
