@extends('layout.admin')

@section('content')
  <div class="container my-5">
    <h1>Subcription Data</h1>
    <div class="mb-3">
        <a href="{{ route('subcriptions.export') }}" class="btn btn-success">Export to Excel</a>
        <form action="{{ route('subcriptions.import') }}" method="POST" enctype="multipart/form-data" class="d-inline">
            @csrf
            <input type="file" name="file" class="form-control d-inline w-auto">
            <button type="submit" class="btn btn-primary">Import from Excel</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcriptions as $subcription)
                <tr>
                    <td>{{ $subcription->email }}</td>
                    <td>{{ $subcription->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection
