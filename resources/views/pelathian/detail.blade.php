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
        <img src="{{ asset('storage/' . $pelatihan->jadwal) }}" class="img-fluid col-8 mx-auto d-block" alt="Jadwal {{ $pelatihan->title }}">
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

        <div class="text-center ">
            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-5 mb-5">Back</a>
            <a href="{{ route('registration', ['id' => $pelatihan->id]) }}" class="btn btn-primary mt-5 mb-5">Daftar Sekarang!</a>

        </div>

        <div class="text-center mt-4 mb-4">
            <h6>ATAU HUBUNGI KAMI</h6>
            <h6>Anda Ingin mendaftar pelatihan dengan MUDAH & CEPAT? Hubungi kami sekarang juga!</h6>
            <h6>Phone: 0251-754-9585<br>Email: info@merakiap.com</h6>
            <a href="tel:+622517549585" class="btn btn-warning mr-2">Phone</a>
            <a href="https://wa.me/6281285527615" class="btn btn-success">WhatsApp</a>
        </div>
    </div>
</section>
@endsection
