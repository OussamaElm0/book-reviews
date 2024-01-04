@extends("layouts.app")

@section('title',"Review")

@section("content")
    <h1>Review: </h1>
    <p>{{ $review->description }}</p>
    <h2>Book: </h2>
    <p>{{ $review->book->name }}</p>
    <h3>Rating: </h3>
    <p>{{ $review->rating }}</p>
@endsection
