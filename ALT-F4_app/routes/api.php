<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/students','App\http\Controllers\StudentController')->except(['create','edit']);
Route::resource('/students','App\Http\Controllers\StudentController')->except(['create','edit']);
Route::post('students',[StudentController::class,'store']);
Route::get('students/{id}', [StudentController::class, 'show']);
Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::put('students/{id}/update',[StudentController::class,'update']);
Route::delete('students/{id}/delete',[StudentController::class,'delete']);


Route::resource('/books','App\Http\Controllers\BookController')->except(['create','edit']);
Route::post('books',[BookController::class,'store']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::get('books/{id}/edit', [BookController::class, 'edit']);
Route::put('books/{id}/update',[BookController::class,'update']);
Route::delete('books/{id}/delete',[BookController::class,'delete']);

//Route::resource('/borrowed','App\Http\Controllers\BorrowedController')->except(['create','edit']);
//Route::get('borrowed/{id}', [BorrowedController::class, 'show']);
Route::resource('/borroweds','App\Http\Controllers\BorrowedController')->except(['create','edit']);
Route::post('borroweds',[BorrowedController::class,'store']);
Route::get('borroweds/{id}', [BorrowedController::class, 'show']);
Route::get('borroweds/{id}/edit', [BorrowedController::class, 'edit']);
Route::put('borroweds/{id}/update',[BorrowedController::class,'update']);
Route::delete('borroweds/{id}/delete',[BorrowedController::class,'delete']);