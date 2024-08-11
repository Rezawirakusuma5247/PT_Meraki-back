@extends('layout.main')

@section('content')
<header class="jumbotron text-center py-5 bg-light">
    <h1 class="display-4">Pelatihan {{ $category->name }}</h1>
    <p class="lead">Explore the training programs under the category {{ $category->name }}.</p>
</header>

<section id="pelatihan-list" class="container py-5">
    <div class="row">
        @forelse($pelatihans as $pelatihan)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $pelatihan->image) }}" class="card-img-top" alt="{{ $pelatihan->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pelatihan->name }}</h5>
                        <p class="card-text">{{ $pelatihan->description }}</p>
                        <a href="{{ route('pelatihan.show', $pelatihan->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No training programs available under this category.</p>
        @endforelse
    </div>
</section>
@endsection
