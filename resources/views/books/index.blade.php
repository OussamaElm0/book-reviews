@extends("layouts.app")

@section("title",'Books')

@section("content")
    <a href="{{ route("books.create") }}">Add new book</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>
@endsection
