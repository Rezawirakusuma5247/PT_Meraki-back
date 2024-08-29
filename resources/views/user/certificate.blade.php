@extends('layout.main')

@section('content')
<style>
    body, html {
        height: 100%;
        margin: 0;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .content {
        flex: 1;
    }
    .footer {
        background-color: #989FC1;
        color: white;
    }
    .footer ul {
        font-size: 0.875rem;
        padding-left: 0;
        list-style: none;
    }
    .footer a {
        color: white;
        text-decoration: none;
    }
    .footer a:hover {
        text-decoration: underline;
    }
    /* Custom styles for dropdown submenu */
    .dropdown-menu .dropdown-submenu {
        position: relative;
    }
    .dropdown-menu .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .whatsapp-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }
    .certificate-form {
        background-color: rgba(176, 76, 135, 0.75);
        padding: 20px;
        border-radius: 15px;
        color: white;
        max-width: 1000px;
        margin: 20px auto;
    }
    .form-title {
        font-weight: bold;
        text-align: center;
    }
    .form-group label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #989FC1;
        border: none;
        margin: 10px;
        text-align: center;
    }
</style>

<header class="jumbotron text-center py-5 bg-light">
    <h1 class="display-4">Certificate Search</h1>
    <p class="lead">Enter the details below to search for your certificate.</p>
</header>

<section id="certificate-search" class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="certificate-form">
                <form method="GET" action="{{ route('search') }}">
                    <div class="form-group">
                        <label for="search" class="form-label">Search</label>
                        <input type="text" class="form-control" id="search" name="query" placeholder="Search by name, training date, or certificate number">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
