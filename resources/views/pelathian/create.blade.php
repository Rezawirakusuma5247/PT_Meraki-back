@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mt-5">Create Pelatihan</h1>
    <form action="{{ route('pelatihans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group my-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group my-3">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group my-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group my-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group my-3">
            <label for="jadwal">Jadwal</label>
            <input type="file" class="form-control" id="jadwal" name="jadwal">
        </div>

        <div class="form-group my-3">
            <label for="why">Alasan memilih pelatihan</label>
            <textarea class="form-control" id="why" name="why" rows="3"></textarea>
        </div>

        <div class="form-group my-3">
            <label for="benefit">Benefit dari pelatihan</label>
            <input type="text" class="form-control" id="benefit" name="benefit">
        </div>

        <div class="form-group my-3">
            <label for="materi">Materi dari pelatihan</label>
            <textarea class="form-control" id="materi" name="materi" rows="3"></textarea>
        </div>

        <div class="form-group my-3">
            <label for="durasi">Durasi pelatihan</label>
            <input type="text" class="form-control" id="durasi" name="durasi">
        </div>

        <div class="form-group my-3">
            <label for="method">Method yang di gunakan dalam pelatihan</label>
            <input type="text" class="form-control" id="method" name="method">
        </div>

        <div class="form-group my-3">
            <label for="persyaratan">Persyaratan mengikuti pelatihan</label>
            <textarea class="form-control" id="persyaratan" name="persyaratan" rows="3"></textarea>
        </div>


        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
</div>
@endsection
