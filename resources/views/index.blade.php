@extends('layouts.master')

@section('title', 'Главная')

@section('content')
{{-- @dd($categories) --}}
    <div class="container"><h3><a href="{{ route('category.create') }}">add category</a></h3><hr>
        @foreach ($categories as $category)
            <p>{{ $category->name }}</p>

            @foreach ($category->children as $childrenCategory)
                <p style="margin-left: 50px;">{{ $childrenCategory->name }}</p>
            @endforeach
            <hr>
        @endforeach
    </div>
@endsection
