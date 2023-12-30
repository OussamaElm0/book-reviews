@extends('layouts.app')

@section("title", "Create Book")

@section("content")
    <form method="post" action="{{ route("books.store") }}">
        @csrf
        <input type="text" name="name" placeholder="name" >
        <input type="number" name="avg_rating" max="5" min="0" step="1" >
        <input type="text" name="author" placeholder="author" >
        <input type="submit" value="Submit">
    </form>
@endsection
