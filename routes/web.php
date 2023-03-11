<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/login', [LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class,'logout']);
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard', function(){
  return \view('dashboard.index');
})->middleware('auth');
Route::resource('/post', PostController::class);
Route::get('/post/{post:slug}', [PostController::class,'show']);
Route::get('/author/{user:username}', function(User $user){
  return view('posts.userPost',[
    'posts' => $user->posts,
    'name' => $user->name
   ]);
});
Route::get('/category', [CategoryController::class,'index']);
Route::get('/category/{category:slug}', [CategoryController::class,'show']);

// liat model post ada method baru yg hars di tambahkan agar jadi method route model baiding nya
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/category',AdminCategoryController::class)->except('show')->middleware('admin');



