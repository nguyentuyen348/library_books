<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('/',function (){
   return redirect()->route('index');
});

Route::prefix('pages')->group(function (){
    Route::get('/login', [LoginController::class, 'showFormLogin'])->name('login');
    Route::post('/login', [LoginController::class,'login']);
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/register',[RegisterController::class,'showFormRegister'])->name('pages.register');
    Route::post('/register',[RegisterController::class,'register']);

});

Route::middleware('auth')->prefix('home')->group(function (){
    Route::get('/index',[\App\Http\Controllers\PageController::class,'index'])->name('index');

});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('users')->group(function () {
        Route::get('/index', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('/{id}', [UserController::class, 'detail'])->whereNumber('id')->name('users.detail');
        Route::get('/{id}/comments/{id_comment?}', [UserController::class, 'getComment'])->name('users.getComment');
        Route::get('{id}/update', [UserController::class, 'update'])->name('users.update');
        Route::post('{id}/update', [UserController::class, 'edit'])->name('users.edit');
    });

    Route::prefix('categories')->group(function () {
        Route::get('index',[\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
        Route::get('create',[\App\Http\Controllers\CategoryController::class,'create'])->name('categories.create');
        Route::post('create',[\App\Http\Controllers\CategoryController::class,'store']);
        Route::get('/{id}/update',[\App\Http\Controllers\CategoryController::class,'edit'])->name('categories.edit');
        Route::post('/{id}/update',[\App\Http\Controllers\CategoryController::class,'update']);
        Route::get('{id}/delete',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('categories.delete');
    });

    Route::prefix('books')->group(function () {
        Route::get('index',[\App\Http\Controllers\BookController::class,'index'])->name('books.index');
        Route::get('create',[\App\Http\Controllers\BookController::class,'create'])->name('books.create');
        Route::post('create',[\App\Http\Controllers\BookController::class,'store']);
        Route::get('/{id}/update',[\App\Http\Controllers\BookController::class,'edit'])->name('books.edit');
        Route::post('/{id}/update',[\App\Http\Controllers\BookController::class,'update']);
        Route::get('{id}/delete',[\App\Http\Controllers\BookController::class,'destroy'])->name('books.delete');
    });

    Route::prefix('authors')->group(function () {
        Route::get('index',[\App\Http\Controllers\AuthorController::class,'index'])->name('authors.index');
        Route::get('create',[\App\Http\Controllers\AuthorController::class,'create'])->name('authors.create');
        Route::post('create',[\App\Http\Controllers\AuthorController::class,'store']);
        Route::get('/{id}/update',[\App\Http\Controllers\AuthorController::class,'edit'])->name('authors.edit');
        Route::post('/{id}/update',[\App\Http\Controllers\AuthorController::class,'update']);
        Route::get('{id}/delete',[\App\Http\Controllers\AuthorController::class,'destroy'])->name('authors.delete');
    });
});






/*
 * Route::method('uri', 'action')
 *
 * - method: GET - lấy tài nguyên
 *           POST - them moi
 *           PUT - cap nhat
 *           DELETE - Xoa
 *
 * - action: - function x
 *           - array [Controller::class, 'method'] -> nen su dung
 *           - string - 'App\Http\Controllers@method' x
 *
 */
