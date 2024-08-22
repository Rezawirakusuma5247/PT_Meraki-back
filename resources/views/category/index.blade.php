@extends('layout.admin')

@section('content')
<div class="container ">
    <h1 class="my-3">Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
