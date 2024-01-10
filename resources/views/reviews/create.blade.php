@extends('layouts.app')

@section("title", "Create Review")

@section("content")
    <form method="post" action="{{ route("reviews.store") }}">
        @csrf
        <input type="text" name="description" placeholder="description" >
        <input type="number" name="rating" max="5" min="0" step="1" >
        <select name="book_id">
            @if($specificBook)
                <option value="{{ $specificBook->id }}">{{ $specificBook->name }}</option>
            @else
                @forelse($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @empty
                    No book found!
                @endforelse
            @endif
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
