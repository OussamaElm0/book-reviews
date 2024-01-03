@extends("layouts.app")

@section("title", $book->name )

@section("content")
    <h1>{{ $book->name }}</h1>
    <div>
        <p>Author: {{ $book->author }}</p>
        <p>Average Rating: {{ $book->avg_rating }}</p>
        <p>Category: {{ $category }}</p>
    </div>
    <h3>Reviews :</h3>
    <ul>
        @forelse($reviews as $review)
            <li>{{ $review->description }}</li>

        @empty
            <h4>No review found!</h4>
        @endforelse
    </ul>
@endsection
