<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view("books.index",[
            "books" => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view("books.create",[
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();

        $book->name = $request->name;
        $book->author = $request->author;
        $book->avg_rating = $request->avg_rating;
        $book->category_id = $request->category;

        $book->save();

        return redirect()
                ->route('books.index')
                ->with('success', $book->name . " added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        $category = $book->category->name;
        $reviews = $book->reviews;

        return view('books.show',[
            'book' => $book,
            'category' => $category,
            "reviews" => $reviews
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("books.edit",[
           "book" => $book,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->name = $request->name;
        $book->author = $request->author;
        $book->avg_rating = $request->avg_rating;
        $book->category_id = $request->category;

        $book->save();

        return redirect()
                ->route("books.show", [
                    "id" => $book->id
                ])
                ->with("success", "This book was updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $name = $book->name;

        $book->delete();

        return redirect()
                ->route("books.index")
                ->with("success", $name . " was deleted successsfully");
    }
    public function searchByAuthor(Request $request)
    {
        $books = Book::where('author', 'like', "%{$request->author}%")->get();

        return view("books.index",[
            "books" => $books
        ]) ;
    }

}
