@extends('layout.admin')

@section('content')
<div class="container mt-5 mb-5">
    <h2>All Registrations</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-4 mb-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Pelatihan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone/WA</th>
                <th>social media</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $registration->pelatihan->title }}</td>
                    <td>{{ $registration->name }}</td>
                    <td>{{ $registration->email }}</td>
                    <td>{{ $registration->number }}</td>
                    <td>{{ $registration->social_media }}</td>
                    <td>{{ ucfirst($registration->role) }}</td>
                    <td>
                        @if(!$registration->approved)
                            <form action="{{ route('registration.approve', $registration->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                        @else
                            <span class="text-success">Approved</span>
                        @endif
                    </td>
                    <td>
                        {{--  <form action="{{ route('registration.destroy', $registration->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this registration?');">Delete</button>
                        </form>  --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
