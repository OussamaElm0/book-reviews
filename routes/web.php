<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ReviewController;

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

Route::view("/","welcome");
Route::get("/books",[BookController::class,"index"])->name("books.index");
Route::get("/reviews",[ReviewController::class,"index"])->name("reviews.index");
Route::get("/books/create",[BookController::class,"create"])->name('books.create');
Route::get("/reviews/create",[ReviewController::class,"create"])->name('reviews.create');

Route::post("/books/store",[BookController::class,"store"])->name("books.store");
Route::post("/reviews/store",[ReviewController::class,"store"])->name("reviews.store");

Route::fallback(function (){
    abort(404);
});

