<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404</title>
  <link rel="icon" href="{{ asset('assets/logo/Logo.png') }}" class="">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

</head>
<body class="hold-transition layout-top-nav">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('assets/logo/Logo.png') }}" alt="AdminLTELogo" height="60" width="60">
      </div>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('assets/logo/Logo.png') }}" alt="" width="50">
            PT. Meraki Institute
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container">
          <!-- /.col-md-6 -->
          <div class="col-10 mx-auto">
            <div class="card card-danger card-outline" >
              <div class="card-header">
                <h2 class=" text-lg-center font-weight-bold">404 Website Not Found</h2>
              </div>
              <div class="card-body">
                <h3 class="text-lg-center font-italic">Sepertinya kamu tidak memiliki hak untuk mengakses laman ini</h3>
                <h5 class="text-lg-center">UHHH OHH?</h4>
              </div>
                    </div>
                  </div>
              </div>
              </div>
              <a href="{{ route('welcome') }}" class="btn btn-block btn-danger col-md-2 mx-auto">Back</a>
        </div>
      </div>
    </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <footer class="text-center py-4">
    <p>&copy; 2024 Meraki Institute. All rights reserved.</p>
  </footer>
</div>
</div>
<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('failed'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
   @endif

   @if($message = Session::get('sucses'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
   @endif
</body>
</html>
