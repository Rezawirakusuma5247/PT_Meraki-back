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
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $pelatihan->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Pelatihan?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var id = button.getAttribute('data-id'); // Extract info from data-* attributes
            var form = document.getElementById('deleteForm');
            form.action = '/pelatihans/' + id; // Update form action
        });
    });

</script>
@endsection
