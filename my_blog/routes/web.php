<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
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

Route::prefix("blogs")->group(function () {
    Route::get('', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/show/{blog_id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/edit/{blog_id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::get('/delete/{blog_id}', [BlogController::class, 'deleteBlog'])->name('blogs.delete');
    Route::get('/store', [BlogController::class, 'store'])->name('blogs.store');
});
