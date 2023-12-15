<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
//route resource
Route::get('/',function () {
    return view('web');
});
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function (){
return view('welcome');
});
Route::get('/',[App\Http\Controllers\PostController::class,'web']);
Route::get('/guru',function () {
    return view('guru');
});
Route::get('/home',[App\Http\Controllers\PostController::class,'home']);
Route::get('/siswa',function () {
    return view('siswa');
});
Route::get('/user',function () {
    return view('user');
});
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/posts/index', [HomeController::class, 'posts']);
    Route::delete('/logot', [AuthController::class, 'logout'])->name('logout');
});