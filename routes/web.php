<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
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

Route::controller(BookController::class)->group(function (){
    Route::get('/books','index')->name('books.index');
    Route::get('/books/create','create')->name("books.create");
    Route::post('/books/store','store')->name('books.store');
    Route::get('/books/{id}','show')->name('books.show');
    Route::delete('/books/delete/{book}','destroy')->name('books.destroy');
    Route::get('/books/edit/{book}','edit')->name('books.edit');
    Route::put('/book/update/{book}','update')->name('books.update');
    Route::post("books","searchByAuthor")->name("books.searchByAuthor");
});

Route::controller(ReviewController::class)->group(function (){
    Route::get("reviews",'index')->name('reviews.index');
    Route::get('reviews/create','create')->name('reviews.create');
    Route::post('reviews/store',"store")->name('reviews.store');
    Route::get('reviews/{id}','show')->name("reviews.show");
});

Route::controller(CategoriesController::class)->group(function (){
   Route::get('categories','index')->name("categories.index");
   Route::get('categories/{id}','show')->name('categories.show');
});

Route::fallback(function (){
    abort(404);
});
