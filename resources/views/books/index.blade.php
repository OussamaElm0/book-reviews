@extends("layouts.app")

@section("title",'Books')

@section("content")
    <a href="{{ route("books.create") }}">Add new book</a>
    <form method="post" action="{{ route("books.searchByAuthor") }}" >
        @csrf
        <label>Search for a  book</label>
        <input type="text" name="author" >
        <button type="submit">Search</button>
    </form>
    <table border=1>
        <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>See Book</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td><a href="/books/{{ $book->id }}">Afficher</a></td>
            </tr>
        @endforeach
    </table>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
@endsection
