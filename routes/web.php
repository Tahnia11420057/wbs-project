<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
        'active'=>'home'
    ]);
});


Route::get('/categories',function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login',[PostController::class,'index']);
Route::get('/signin',[PostController::class,'index']);
Route::get('/bantuan',[PostController::class,'index']);
Route::get('/tatacarapengaduan',[PostController::class,'index3']);
Route::get('/alurpengaduan',[PostController::class,'index2']);
Route::get('/tentangwbs',[PostController::class,'index1']);
Route::get('/aktivitassaya',[PostController::class,'index']);
Route::get('/partials/footer', [PostController::class],'index');
Route::get('partials/navbar',[PostController::class], 'index');



