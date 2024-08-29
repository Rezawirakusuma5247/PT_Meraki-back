@extends('layout.main')
@section('content')
<section id="services" class="py-5 bg-light">
    <div class="container text-center mb-4">
        <h2>Jadwal Pelatihan</h2>
        <hr class="col-1 mx-auto border-dark opacity-100 border-2 mt-3 mb-3">
        <p>Berikut jadwal pelatihan kami.</p>

        <!-- Filter Buttons -->
        <ul class="nav nav-pills justify-content-center mb-4 g-5" id="filter-buttons">
            @foreach($categories as $category)
                <li class="nav-item">
                    <button class="nav-link" onclick="showSection('{{ $category->id }}')">{{ $category->name }}</button>
                </li>
            @endforeach
        </ul>

        <!-- Dynamic Sections -->
        <!-- Filtered Pelatihan Section -->
        @foreach($categories as $category)
            <div id="{{ $category->id }}" class="filter-section d-none">
                <div class="row gy-4 mx-auto p-5">
                    @foreach($pelatihans->where('category_id', $category->id) as $pelatihan)
                        <div class="col-md-4 mb-4 d-flex align-items-stretch">
                            <div class="card flex-fill">
                                <img src="{{ asset('storage/' . $pelatihan->jadwal) }}" class="card-img-top" style="height: 200px" alt="{{ $pelatihan->title }}" data-bs-toggle="modal" data-bs-target="#pelatihanModal{{ $pelatihan->id }}">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pelatihan->title }} <small class="text-primary">(Click For Detail)</small></h6>
                                    <p class="card-text"><small class="text-muted">{{ $pelatihan->created_at->format('d M Y') }}</small></p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="pelatihanModal{{ $pelatihan->id }}" tabindex="-1" aria-labelledby="pelatihanModalLabel{{ $pelatihan->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="pelatihanModalLabel{{ $pelatihan->id }}">{{ $pelatihan->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('storage/' . $pelatihan->jadwal) }}" class="img-fluid mb-3" alt="{{ $pelatihan->title }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="{{ route('pelatihan.show', $pelatihan->id) }}" class="btn btn-primary btn-md">Daftar Sekarang!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>
<script>
    function showSection(section) {
        document.querySelectorAll('.filter-section').forEach(function(el) {
            el.classList.add('d-none');
        });
        document.getElementById(section).classList.remove('d-none');
        document.querySelectorAll('#filter-buttons .nav-link').forEach(function(button) {
            button.classList.remove('active');
        });
        event.target.classList.add('active');
    }
    document.addEventListener('DOMContentLoaded', function() {
        const firstButton = document.querySelector('#filter-buttons .nav-link');
        if (firstButton) {
            firstButton.click();
        }
    });
</script>
@endsection
