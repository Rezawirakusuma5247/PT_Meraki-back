@extends('layout.main')
@section('content')
<header class="jumbotron text-center py-5 bg-light">
    <h1 class="display-4">Pelatihan</h1>
    <p class="lead">Search for your certificate by entering your details below.</p>
</header>

<section id="services" class="container py-5 content">
    <div class="container text-center mt-5">
        <h1>Pelatihan</h1>
        <p>Search for your certificate by entering your details below.</p>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="{{ route('pelatihan.category', strtolower($category->name)) }}" style="text-decoration: none; color: inherit;">
                                <h5 class="card-title">Pelatihan {{ $category->name }}</h5>
                                <p class="card-text">Our training programs are designed to develop the skills needed for success.</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
