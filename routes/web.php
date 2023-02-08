<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// 管理者ログイン
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/admin/login', 'admin/login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [App\Http\Controllers\Admin\LoginController::class,'logout']);

Route::get('/about', function () {
    return view('about');
});