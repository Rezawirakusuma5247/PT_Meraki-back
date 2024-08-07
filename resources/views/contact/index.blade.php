
@extends('layout.admin')

@section('content')
  <div class="container my-5">
    <h1>Contact Messages</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection
