<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('', function () {
    return view('index');
});

Route::get('/create-blogs', [App\Http\Controllers\DSCBlogController::class,'create']);
Route::post('/create-blogs/success', [App\Http\Controllers\DSCBlogController::class,'store']);
Route::get('/view-blogs', [App\Http\Controllers\DSCBlogController::class,'view']);
Route::get('/update-blog/{id}', [App\Http\Controllers\DSCBlogController::class,'edit']);
Route::post('/update-blog/{id}/updated', [App\Http\Controllers\DSCBlogController::class,'update']);
Route::get('/delete-blog/{id}', [App\Http\Controllers\DSCBlogController::class,'destroy']);











