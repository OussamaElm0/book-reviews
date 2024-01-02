@extends("layouts.app")

@section("title",'Books')

@section("content")
    <a href="{{ route("books.create") }}">Add new book</a>
    <table border=1>
        <tr>
            <th>Book Title</th>
            <th>See Book</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td><a href="/books/{{ $book->id }}">Afficher</a></td>
            </tr>
        @endforeach
    </table>
@endsection
