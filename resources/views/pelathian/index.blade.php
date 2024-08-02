@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Pelatihans</h1>
    <a href="{{ route('pelatihans.create') }}" class="btn btn-primary">Create Pelatihan</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelatihans as $pelatihan)
                <tr>
                    <td>{{ $pelatihan->id }}</td>
                    <td>{{ $pelatihan->title }}</td>
                    <td>{{ $pelatihan->description }}</td>
                    <td>{{ $pelatihan->category->name ?? 'Uncategorized' }}</td>
                    <td><img src="{{ asset('storage/' . $pelatihan->image) }}" alt="{{ $pelatihan->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('pelatihans.edit', $pelatihan->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('pelatihans.destroy', $pelatihan->id) }}" method="POST" style="display:inline-block;">
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
