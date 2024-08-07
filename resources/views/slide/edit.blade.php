@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Edit Slide</h1>
        <form action="{{ route('slides.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
