
@extends('layout.admin')

@section('content')
  <div class="container my-5">
    <h1>Contact Messages</h1>
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
