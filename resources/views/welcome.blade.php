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
                        <a class="nav-link active text-white" aria-current="page" href="home.html">Home</a>
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

        <main class="main bg-light" id="get" >
            <section id="tampilanawal" class="py-4 " style="background-color: #b04c87bf;">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                            <h1 class="text-white">Better Solutions For Your Business</h1>
                            <h6 class="my-2">Pelatihan dan Sertifikasi Kompetensi sesuai standar BNSP/Kemnaker RI, mandiri atau dengan provider lain.</h6>
                            <div class="d-flex my-3">
                                <a href="#services" class=" col-6 btn btn-lg btn-primary">Get Started</a>
                            </div>
                            <div class="conainer">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container" >
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1 d-flex justify-content-between align-items-center bg-light p-3">
                        <div class="text-left">
                            <h4><span style="color: #b04c87bf;">Informasi &</span> Jadwal Pelatihan</h4>
                            <h4 style="color: #b04c87bf;">PT Meraki Institute</h4>
                            <p>PT Meraki menyiapkan segala macam pelatihan yang anda butuhkan! <br>Lakukan hal terbaik untuk hasil yang terbaik!</p>
                        </div>
                        <button type="button" class="btn btn-success btn-md d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <small>Daftar Sekarang</small>
                        </button>
                    </div>
                </div>
            </div>

            <section id="about" class="about section my-3 py-5" style="background-color: #f8f9fa;">
                <div class="container-section-title text-center">
                    <h2>About Us</h2>
                    <hr class="col-1 mx-auto  border-dark opacity-100 border-2 mt-3 mb-3">
                </div>
                <div class="container">
                    <div class="row mx-auto col-lg-12">
                        <div class="card col-lg-5 gy-4 mx-auto">
                            <div class="card-body">
                                <p>Meraki Institute merupakan lembaga pelatihan dan sertifikasi kompetensi bidang Kesehatan dan Keselamatan Kerja (K3), Manajemen Lingkungan Hidup & Keanekaragaman Hayati, dan Strategi Bisnis.</p>
                            </div>
                        </div>
                        <div class="card col-lg-5 gy-4 mx-auto">
                            <div class="card-body">
                                <p>Pelatihan dan Sertifikasi Kompetensi sesuai bidang profesi peserta mengacu pada standar kompetensi dari BNSP dan atau Kemnaker RI yang dilaksanakan secara mandiri atau bekerjasama dengan provider lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="why-us" class="py-5 bg-light">
                <div class="container">
                    <div class="row g-4">
                        <div class="container-section-title text-center">
                            <h2>Why Us</h2>
                            <hr class="col-1 mx-auto border-dark opacity-100 border-2 mt-3 mb-3">
                        </div>
                        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
                            <div class="content px-xl-5">
                                <h4 class="text-dark mb-4">Layanan pelatihan PT Meraki Anugerah Pratama adalah kemampuan mereka untuk menyesuaikan program untuk memenuhi kebutuhan organisasi tertentu.</h4>
                                <div class="accordion" id="whyUsAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Customized Training
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                Our training programs are tailored to meet the specific needs of your organization, ensuring relevant and impactful learning experiences.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Expert Instructors
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                Our courses are led by industry experts with years of experience, providing you with the knowledge and skills you need to succeed.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Flexible Scheduling
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                We offer flexible scheduling options to fit the busy schedules of our clients, ensuring that training can be conducted at the most convenient times.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 text-center">
                            <img src="your-image-url.jpg" class="img-fluid rounded" alt="Why Us">
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="py-5 bg-light">
                <div class="container text-center mb-4">
                    <h2>Pelatihan</h2>
                    <hr class="col-1 mx-auto  border-dark opacity-100 border-2 mt-3 mb-3">
                    <p>Pelatihan kami meliputi Pelatihan KEMNAKER RI dan Pelatihan BNSP.</p>

                    <!-- Filter Buttons -->
                    <ul class="nav nav-pills justify-content-center mb-4 g-5" id="filter-buttons">
                        <li class="nav-item">
                            <button class="nav-link active" onclick="showSection('kemnaker')">KEMNAKER RI</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" onclick="showSection('bnsp')">BNSP</button>
                        </li>
                    </ul>

                    <!-- KEMNAKER Section -->
                    <div id="kemnaker" class="filter-section">
                        <div class="row gy-4">
                            <div class="col-md-4 col-sm-6 mx-auto">
                                <img src="assets/Img/flayer/gambar 1.jpg" class="img-fluid" alt="Image 1">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 2.jpg" class="img-fluid" alt="Image 2">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 3.jpg" class="img-fluid" alt="Image 3">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 4.jpg" class="img-fluid" alt="Image 4">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 5.jpg" class="img-fluid" alt="Image 5">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 6.jpg" class="img-fluid" alt="Image 6">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 7.jpg" class="img-fluid" alt="Image 7">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 8.jpg" class="img-fluid" alt="Image 8">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <img src="assets/Img/flayer/gambar 9.jpg" class="img-fluid" alt="Image 9">
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="pelatihan_kemnaker.html" class="col-3  btn-lg btn btn-primary">Go Kemnaker</a>
                        </div>
                    </div>

                    <!-- BNSP Section -->
                    <div id="bnsp" class="filter-section d-none">
                        <div class="row gy-4">
                            <div class="col-12">
                                <img src="assets/Img/Pelatihan/singleimage-100.jpg" class="img-fluid" alt="Single Image">
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="pelatihan_bnsp.html" class="col-3  btn-lg btn btn-primary">Go BNSP</a>
                        </div>
                    </div>
                </div>
            </section>

            <script>
            function showSection(section) {
                document.querySelectorAll('.filter-section').forEach(function(section) {
                    section.classList.add('d-none');
                });
                document.getElementById(section).classList.remove('d-none');
                document.querySelectorAll('#filter-buttons .nav-link').forEach(function(button) {
                    button.classList.remove('active');
                });
                event.target.classList.add('active');
            }
            </script>

            <section id="portfolio" class="py-5 bg-light">
                <div class="container text-center mb-4">
                    <h2>Portfolio</h2>
                    <hr class="col-1 mx-auto  border-dark opacity-100 border-2 mt-3 mb-3">
                    <p>Portfolio kami berisi hasil pelatihan yang telah kami lakukan.</p>
                </div>
                <div class="container mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <div class="row d-none d-lg-flex">
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex d-lg-none">
                                        <div class="col-12 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <div class="row d-none d-lg-flex">
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex d-lg-none">
                                        <div class="col-12 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-item">
                                    <div class="row d-none d-lg-flex">
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home4.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home5.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex d-lg-none">
                                        <div class="col-12 mt-3 d-flex justify-content-center">
                                            <div class="card">
                                                <img src="{{ asset('asset/img/home6.jpg') }}" class="card-img-top" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
            <div class="text-center bg-dark py-5">
                <h4><span class="text-white">Apa yang kalian tunggu?</h4>
                <h4 class="text-white">Segera Mulai!</h4>
                   <a href="#get" class="btn btn-primary mx-auto mt-3">Get Started</a>
            </div>

            <!--<section id="certificate" class="py-5">
                <div class="container text-center mb-4">
                    <h2>Certificate</h2>
                    <hr class="col-1 mx-auto border border-dark opacity-100 border-2 mt-3 mb-3">
                    <h6>Certificate kami telah diberikan kepada pelatih yang telah melakukan pelatihan dan sertifikasi.</h6>
                </div>
                <div class="container mt-5">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/Img/Certificate.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Certificate</h5>
                                    <p class="card-text">Example Certificate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/Img/Certificate.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Certificate</h5>
                                    <p class="card-text">Example Certificate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="assets/Img/Certificate.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Certificate</h5>
                                    <p class="card-text">Example Certificate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section id="contact" class="contact section dark-background">
                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-3">
                            <h2 class="mb-2">Contact Us</h2>
                            <hr class="col-3 m-1  border-dark opacity-100 border-2 mt-3 mb-3">
                            <p class="mx-auto">Jika anda ingin menghubungi kami, silahkan isi form di samping.</p>
                            <h3>Kontak Meraki Institute</h3>
                            <p><i class="fab fa-whatsapp"></i> 0812-8552-7615</p>
                            <h3>Call Us</h3>
                            <p><i class="fas fa-phone"></i> 0251-754-9585</p>
                            <h3>Email Us</h3>
                            <p><i class="fas fa-envelope"></i> info@merakip.com</p>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="form-group row mt-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="name" class="mb-1">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="subject" class="mb-1">Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="message" class="mb-1">Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3 mb-3 col-lg-12">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="footer-newsletter py-3 mt-5 mb-5">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6">
                                <h4>Bergabunglah dengan Buletin Kami</h4>
                                <p>Berlangganan buletin kami dan dapatkan berita terbaru tentang informasi dan layanan kami!</p>
                                <form>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Masukan email-mu" aria-label="Enter your email" aria-describedby="button-subscribe">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="loading d-none">Loading</div>
                                    <div class="error-message d-none">An error occurred. Please try again.</div>
                                    <div class="sent-message d-none">Your subscription request has been sent. Thank you!</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
