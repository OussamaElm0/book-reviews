@extends("layouts.app")

@section("title","Categories")

@section("content")
    <div>
        @foreach($categories as $category)
            <p>{{ $category->name }}</p>
        @endforeach
    </div>
@endsection
