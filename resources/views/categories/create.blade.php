@extends('layouts.master')

@section('title', 'create category')

@section('content')
    <div class="container">
        <h3>add category</h3>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <input type="text" class="form-control" name="name"
                required placeholder="category name" value="{{ old('name') }}"><br>
            
            <select name="parent_id">
                <option disabled selected>parent category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <input type="submit" class="btn btn-success" value="add category">
        </form>
    </div>
@endsection
