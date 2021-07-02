<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Models\Content;

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

Route::get('/home', function () {
    return view('welcome');
});
// Route::get('/category', function () {
//     return view('admin.data-category');
// });

Route::get('/', function () {
    return view('admin/home');
});

Route::resource('category', CategoryController::class);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/add', [CategoryController::class, 'create']);
Route::get('/hapus/{id}', [CategoryController::class, 'destroy']);


Route::get('/content', [ContentController::class, 'index']);
Route::resource('content', ContentController::class);

// Route::post('/create', [ContentController::class, 'uploadFile'])->name('upload.uploadFile');
