@extends("layouts.app")

@section("title", $book->name )

@section("content")
    @if(session("success"))
        <p>{{ session("success") }}</p>
    @endif
    <h1>{{ $book->name }}</h1>
    <div>
        <p>Author: {{ $book->author }}</p>
        <p>Average Rating: {{ $book->avg_rating }}</p>
        <p>Category: {{ $category }}</p>
    </div>
    <h3>Reviews :</h3>
    <a href="{{ route('reviews.create',["book" => $book]) }}">Add reviews</a>
    <ul>
        @forelse($reviews as $review)
            <li>{{ $review->description }}</li>

        @empty
            <h4>No review found!</h4>
        @endforelse
    </ul>
    <form method="post" action="{{ route("books.destroy",["book" => $book]) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete ">
    </form>
    <button type=""><a href="{{ route("books.edit", ['book' => $book->id]) }}">Update</a></button>
@endsection
