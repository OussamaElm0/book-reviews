@extends("layouts.app")

@section("title","Categories")

@section("content")
    <div>
        @foreach($categories as $category)
            <p><a href="{{ route("categories.show",['id' => $category->id]) }}">{{ $category->name }}</a></p>
        @endforeach
    </div>
@endsection
