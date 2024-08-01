@extends('layout.admin')

@section('content')
<div class="container mt-5">
    <h1>Edit Pelatihan</h1>
    <form action="{{ route('pelatihans.update', $pelatihan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group my-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $pelatihan->title }}" required>
        </div>
        <div class="form-group my-3">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $pelatihan->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group my-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group my-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $pelatihan->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Update</button>
    </form>
</div>
@endsection
