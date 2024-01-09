@extends('layouts.app')

@section('title',$book->name)

@section('content')
    <form method="post" action="{{ route("books.update", ["book" => $book]) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" value="{{ $book->name }}" name="name" ><br>
        <label>Author:</label>
        <input type="text" value="{{ $book->author }}" name="author"><br>
        <label>Avg Rating:</label>
        <input type="number" value="{{ $book->avg_rating }}" name="avg_rating" step="1" min="0" max="5"><br>
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>
        <button type="submit">Update</button>
    </form>
@endsection
