<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Meraki Institute | Home</title>
    <link rel="icon" href="assets/logo/Logo.png" class="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .footer {
            background-color: #989FC1;
        }
        .footer ul {
            font-size: 0.875rem;
            color: white;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgba(176, 76, 135, 0.75);">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('assets/logo/Logo.png') }}" alt="PT Meraki Institute Logo" width="50px">
                Meraki Institute
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('pelatihans.index')}}">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pelatihan.html">Pelatihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="certificate.html">Certificate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info Update
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="">Jadwal Pelatihan K3</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 1</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 2</a></li>

                                    <li><a class="dropdown-item" href="#">Deep Dropdown 3</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 4</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="">Pelatihan BNSP</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 1</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 2</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 3</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 4</a></li>
                                    <li><a class="dropdown-item" href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer id="footer" class="footer">
        <div class="container py-3">
            <div class="row mx-auto mt-3">
                <!-- About Section -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <a href="index.html" class="d-flex align-items-center mb-3">
                        <span class="h5 mb-0 text-dark fw-bold">Meraki Institute</span>
                    </a>
                    <p class="mb-1 text-white small">Kontak CDC: 0813-8988-3203</p>
                    <p class="mb-1 text-white small">Meraki Institute: 0812-8552-7615</p>
                    <p class="mb-1 text-white small"><strong>Phone:</strong> 0251-754-9585</p>
                    <p class="mb-0 text-white small"><strong>Email:</strong> info@merakiap.com</p>
                </div>
                <div class="col-md-2 mb-3 mb-md-0">
                    <h5 class="small  fw-bold">Useful Links</h5>
                    <ul>
                        <li><a href="home.html" class="text-white small">Home</a></li>
                        <li><a href="home.html" class="text-white small">About us</a></li>
                        <li><a href="certificate.html" class="text-white small">Certification</a></li>
                        <li><a href="pelatihan.html" class="text-white small">Pelatihan</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="small fw-bold">Our Services</h5>
                    <ul>
                        <li><a href="#" class="text-white small">Pelatihan K3 KEMNAKER RI</a></li>
                        <li><a href="#" class="text-white small">Pelatihan BNSP</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="small fw-bold">Follow Us</h5>
                    <div class="d-flex">
                        <a href="#" class="me-2 text-white small"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2 text-white small"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2 text-white small"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-2 text-white small"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center py-1 mb-0 text-white small">&copy; 2024 Meraki Institute. All rights reserved.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    </body>
    </html>
