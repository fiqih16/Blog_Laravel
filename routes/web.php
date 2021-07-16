<?php

use Illuminate\Support\Facades\Route;
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

// cara 1 (Route Multi bahasa)
// Route::get('/localization/{language}', \App\Http\Controllers\LocalizationController::class)->name('localization.switch');

// cara 2 (Route Multi bahasa)
Route::get('/localization/{language}', [\App\Http\Controllers\LocalizationController::class, 'switch'])->name('localization.switch');

Route::get('/',[\App\Http\Controllers\BlogController::class, 'home'])->name('blog.home');

Route::get('/dashboard', function() {
    return view('layouts.dashboard');
});

// nonaktifkan reqister
Auth::routes([
    'register' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard','middleware' => ['web','auth']],function(){
    // dashboardController
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    // categoriesController
    Route::get('/categories/select',[\App\Http\Controllers\CategoryController::class, 'select'])->name('categories.select');
    Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
    //tagsController
    Route::get('/tags/select',[\App\Http\Controllers\TagController::class, 'select'])->name('tags.select');
    Route::resource('/tags', \App\Http\Controllers\TagController::class)->except(['show']);
    // PostController
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    // laravel file manager
    Route::group(['prefix' => 'filemanager'], function () {
        Route::get('
            /index',
            [\App\Http\Controllers\FileManagerController::class, 'index']
        )->name('filemanager.index');
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    // RoleController
    Route::get('/roles/select', [\App\Http\Controllers\RoleController::class,'select'])->name('roles.select');
    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    // UserController
    Route::resource('/users', \App\Http\Controllers\UserController::class)->except(['show']);
});