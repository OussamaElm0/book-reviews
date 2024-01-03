@extends('layouts.app')

@section("title", "Create Book")

@section("content")
    <form method="post" action="{{ route("books.store") }}">
        @csrf
        <input type="text" name="name" placeholder="name" >
        <label>Average Rating: </label>
        <input type="number" name="avg_rating" max="5" min="0" step="1" >
        <input type="text" name="author" placeholder="author" >
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" >{{ $category->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
