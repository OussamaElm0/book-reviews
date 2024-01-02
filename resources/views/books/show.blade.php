@extends("layouts.app")

@section("title", $book->name )

@section("content")
    <h1>{{ $book->name }}</h1>
    <h3>Reviews :</h3>
    <ul>
        @forelse($reviews as $review)
            <li>{{ $review->description }}</li>

        @empty
            <h4>No review found!</h4>
        @endforelse
    </ul>
@endsection
