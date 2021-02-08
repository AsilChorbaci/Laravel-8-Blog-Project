<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('main.post');
});

// route::get('/',);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin
Route::middleware('auth')->prefix('admin')->group( function () {
    //Home
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');
    //Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::get('category/edit', [App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update', [App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');

});

Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('login_check');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');
