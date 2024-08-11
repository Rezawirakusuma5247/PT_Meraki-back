@extends('layout.main')

@section('content')
<section id="pelatihan-detail" class="container py-5">
    <div class="container">

        <div class="text-center mb-4">
            @if($pelatihan->image)
                <img src="{{ asset('storage/' . $pelatihan->image) }}" class="img-fluid mb-4" alt="{{ $pelatihan->title }}">
            @endif
        </div>
        <div class="text-center mb-4">
            <h3>SUDAH SIAP MENJADI {{ $pelatihan->title }}?</h3>
        </div>

        <div class="mb-4">
            <h3>{{ $pelatihan->description }}</h3>
        </div>

        @if($pelatihan->jadwal)
    <div class="mb-4 text-center">
        <h6>Jadwal Pelatihan</h6>
        <img src="{{ asset('storage/' . $pelatihan->jadwal) }}" class="img-fluid col-6 mx-auto d-block" alt="Jadwal {{ $pelatihan->title }}">
    </div>
@endif


        @if($pelatihan->why)
        <div class="mb-4">
            <h3>Kenapa harus mengikuti  {{ $pelatihan->title }}?</h3>
            <h5>{{ $pelatihan->why }}</h5>
        </div>
    @endif

        @if($pelatihan->materi)
        <div class="mb-4">
            <h3>Apa saja materi yang akan di sampaikan ?</h3>
            <h5>{{ $pelatihan->materi }}</h5>
        </div>
        @endif
        @if($pelatihan->durasi)
        <div class="mb-4">
            <h3>Berapa lama durasi pelaksanaan pelatihan?</h3>
            <h5>{{ $pelatihan->durasi }}</h5>
        </div>
        @endif

        @if($pelatihan->method)
        <div class="mb-4">
            <h3>Metode yang digunakan dalam pelatihan ini :</h3>
            <h5>{{ $pelatihan->method }}</h5>
        </div>
    @endif

        @if($pelatihan->persyaratan)
        <div class="mb-4">
            <h3>Persyaratan Mengikuti Pelatihan {{ $pelatihan->title }} ?</h3>
            <h5>{{ $pelatihan->persyaratan }}</h5>
        </div>
    @endif


        @if($pelatihan->benefit)
            <div class="mb-4">
                <h3>Benefits yang akan anda dapatkan jika mengikuti pelatihan dari kami :</h3>
                <h5>{{ $pelatihan->benefit }}</h5>
            </div>
        @endif

        <div class="text-center">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</section>
@endsection
