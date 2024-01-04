@extends("layouts.app")

@section("title", $category->name)

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    <h3>Books belong to this category :</h3>
    <ul>
        @forelse($books as $book)
            <li><a href="{{ route("books.show", ['id' => $book->id]) }}">{{ $book->name }}</a></li>
        @empty
            <h1>This category have any book</h1>
        @endforelse
    </ul>
@endsection
