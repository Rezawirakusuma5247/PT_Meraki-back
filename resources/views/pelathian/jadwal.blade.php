@extends('layout.main')

@section('content')
<section id="pelatihan-jadwal" class="container py-5">
    <div class="container text-center">
        <h1>{{ $pelatihan->title }}</h1>
        @if($pelatihan->jadwal)
            <div class="mb-4">
                <h6>Jadwal Pelatihan</h6>
                <img src="{{ asset('storage/' . $pelatihan->jadwal) }}" class="img-fluid col-6 mx-auto" alt="Jadwal {{ $pelatihan->title }}">
            </div>
        @endif
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
</section>
@endsection
