<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {
   return'This is a test of the about page.';
});

// url address show here in form of what the route is getting or posting e.g (/admin/user',)

Route::get('/admin/user', [\App\Http\Controllers\AdminController::class, 'userIndex']) ->name('adminindex');

Route::get('/admin/users/create', [\App\Http\Controllers\AdminController::class, 'userCreate']) ->name('admincreate');

Route::post('/admin/users/store', [\App\Http\Controllers\AdminController::class, 'userStore']) ->name('adminstore');

Route::get('/admin/users/edit', [\App\Http\Controllers\AdminController::class, 'userEdit']) ->name('adminedit');

// Blog

Route::get('/admin/blog/create', [\App\Http\Controllers\BlogController::class,'blogCreate']) ->name('blogcreate');

Route::get('/admin/blog/index', [\App\Http\Controllers\BlogController::class,'blogIndex']) ->name('blogindex');

