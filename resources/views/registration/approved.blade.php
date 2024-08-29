@extends('layout.admin')

@section('content')
<div class="container my-3">
    <h2>Approved Registrations</h2>

    <!-- Import Form -->
    <div class="mb-3">
        <form action="{{ route('registrations.import') }}" method="POST" enctype="multipart/form-data" style="display:inline-block;">
            @csrf
            <input type="file" name="file" required>
            <button type="submit" class="btn btn-primary">Import from Excel</button>
        </form>
    </div>

    @if ($approvedRegistrations->isEmpty())
        <p>No approved registrations available.</p>
    @else
        @foreach ($approvedRegistrations->groupBy('pelatihan_id') as $pelatihanId => $pelatihanRegistrations)
            <!-- Display the Pelatihan title once for each group -->
            <h4>{{ $pelatihanRegistrations->first()->pelatihan->title }}</h4>

            <!-- Export Button for specific pelatihan -->
            <div class="mb-3">
                <a href="{{ route('registrations.export', ['pelatihan_id' => $pelatihanId]) }}" class="btn btn-success">Export to Excel</a>
            </div>

            <table class="table table-bordered mt-3 mb-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Social Media</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelatihanRegistrations as $registration)
                        <tr>
                            <td>{{ $registration->id }}</td>
                            <td>{{ $registration->name }}</td>
                            <td>{{ $registration->email }}</td>
                            <td>{{ $registration->number }}</td>
                            <td>{{ $registration->social_media }}</td>
                            <td>{{ $registration->role }}</td>
                            <td>
                                <form action="{{ route('registration.undo', $registration->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-info btn-sm">Done</button>
                                </form>
                                <!-- Optional: Add a "Delete" button -->
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    @endif
</div>
@endsection
