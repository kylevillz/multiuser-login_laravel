<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
  Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
  Route::get('profile', [AdminController::class,'profile'])->name('admin.profile');
  Route::get('settings', [AdminController::class,'settings'])->name('admin.settings');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
  Route::get('dashboard', [UserController::class,'index'])->name('user.dashboard');
  Route::get('profile', [UserController::class,'profile'])->name('user.profile');
  Route::get('settings', [UserController::class,'settings'])->name('user.settings');

});

Route::group(['prefix'=>'publisher', 'middleware'=>['isPublisher','auth']], function(){
  Route::get('dashboard', [PublisherController::class,'index'])->name('publisher.dashboard');
  Route::get('profile', [PublisherController::class,'profile'])->name('publisher.profile');
  Route::get('settings', [PublisherController::class,'settings'])->name('publisher.settings');

});

Route::group(['prefix'=>'forum', 'middleware'=>['isForum','auth']], function(){
  Route::get('dashboard', [ForumController::class,'index'])->name('forum.dashboard');
  Route::get('profile', [ForumController::class,'profile'])->name('forum.profile');
  Route::get('settings', [ForumController::class,'settings'])->name('forum.settings');

});
