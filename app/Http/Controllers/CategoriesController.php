<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view("categories.categoriesIndex",[
            'categories' => $categories
        ]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        $books = $category->books;

        return view("categories.show",[
            "category" => $category,
            "books" => $books
        ]);
    }
}
