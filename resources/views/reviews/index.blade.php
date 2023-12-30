@extends("layouts.app")

@section("title", "My Reviews")

@section("content")
    <a href="{{ route("reviews.create") }}">Add a new review</a>

    <ul>
        @foreach($reviews as $review)
            <li>{{ $review->description }}</li>
        @endforeach
    </ul>
@endsection
