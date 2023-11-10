<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;


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
    return view('home');
});
Route::middleware(['auth'])->group(function () {
    Route::resources([
    '/posts' => PostController::class,
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::resources([
    '/departments' => DepartmentController::class,
    ]);
});
Route::middleware(['auth'])->group(function () {
    Route::resources([
    '/categories' => CategoriesController::class,
    ]);
});
Route::middleware(['auth'])->group(function () {
    Route::resources([
    '/comments' => CommentsController::class,
    ]);
});
    Route::controller(PostController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts.index');
        Route::get('/posts/{post}', 'show')->name('posts.show');
        })->withoutMiddleware([Auth::class]);
    
    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/departments', 'index')->name('departments.index');
        })->withoutMiddleware([Auth::class]);
    
    Route::controller(CategoriesController::class)->group(function () {
        Route::get('/categories', 'index')->name('categories.index');
        })->withoutMiddleware([Auth::class]);

    Route::controller(DepartmentController::class)->group(function () {
        Route::get('/register', 'selectInRegister')->name('auth.register');
        })->withoutMiddleware([Auth::class]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

