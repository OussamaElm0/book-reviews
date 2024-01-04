@extends("layouts.app")

@section("title", "My Reviews")

@section("content")
    <a href="{{ route("reviews.create") }}">Add a new review</a>

    <ul>
        @foreach($reviews as $review)
            <li><a href="{{ route("reviews.show",["id" => $review->id]) }}">{{ $review->description }}</a></li>
        @endforeach
    </ul>
@endsection
