@extends('layout.admin')

@section('content')
    <div class="container">
        <h1>Upload Slide</h1>
        <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
@endsection
