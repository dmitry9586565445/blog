@extends('layouts.master')

@section('title', 'Главная')

@section('content')
{{-- @dd($categories) --}}
    <div class="container"><h3><a href="{{ route('category.create') }}">add category</a></h3><hr>
        @include('includes.tree_categories', ['items' => $categories, 'parent_id' => null])
    </div>
@endsection
