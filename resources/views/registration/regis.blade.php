@extends('layout.main')
@section('content')
<section id="registration" class="py-5 bg-light">
    <div class="container">
        <h2 class="form-title">FORMULIR REGISTRASI ONLINE {{ $pelatihan->title}}</h2>
        <p class="text-center">Silahkan isi FORMULIR REGISTRASI ONLINE berikut dengan data yang benar agar dikonfirmasi ulang kembali via email, WA maupun telepon.</p>
        <div class="registration-form">
            <form action="{{ route('registration.store', $pelatihan->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namaLengkap">Nama Lengkap*</label>
                    <input type="text" class="form-control" name="name" id="namaLengkap" placeholder="Masukkan Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone/WA Peserta*</label>
                    <input type="text" class="form-control" name="number" id="phone" placeholder="Phone/WA Peserta" required>
                </div>
                <div class="form-group">
                    <label for="instagram">Akun Instagram (optional)</label>
                    <input type="text" class="form-control" name="social_media" id="instagram" placeholder="Akun Instagram">
                </div>
                <div class="form-group">
                    <label>Daftar Sebagai</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="personal" value="personal" required>
                        <label class="form-check-label" for="personal">Personal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="perusahaan" value="perusahaan">
                        <label class="form-check-label" for="perusahaan">Perusahaan</label>
                    </div>
                </div>
                <div class="text-center d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
