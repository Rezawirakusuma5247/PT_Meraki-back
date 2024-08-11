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
        .bg-main {
            background-image: url('assets/Img/web home-100.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
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
        .btn-primary {
            background-color: #989FC1;
            border: none;
            text-align: center;
        }
        body {
    font-family: Arial, sans-serif;
}

.chat-bubble {
    position: fixed;
    bottom:80px; /* Increased to make room for the button */
    right: 20px;
    width: 350px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 100;
    overflow: hidden;
    display: none; /* Hidden by default */
}

.chat-header {
    background-color: #989FC1;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.chat-body {
    padding: 10px;
}

.chat-account {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.chat-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.chat-info {
    flex-grow: 1;
    padding: 2px;

}

.chat-link {
    color: #989FC1;
    text-decoration: none;
}

.chat-footer {
    background-color: #f8f8f8;
    padding: 10px;
    text-align: center;
}

.whatsapp-button {
    position: fixed;
    bottom: 20px; /* Changed to position the button below the chat bubble */
    right: 20px;
    background-color: #25d366;
    color: #fff;
    border-radius: 40px; /* Adjusted to maintain circular shape */
    padding: 10px 20px; /* Added padding for button */
    font-size: 16px; /* Adjusted font size */
    cursor: pointer;
    border: none;
    outline: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none; /* Ensured no underline for link */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.whatsapp-button i {
    margin-right: 8px;
}


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgba(176, 76, 135, 0.75);">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="assets/logo/Logo.png" alt="PT Meraki Institute Logo" width="50px">
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
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('pelatihan') }}">Pelatihan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('certificate') }}">Certificate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info Update
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">{{ $category->name }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($category->pelatihans as $pelatihan)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('pelatihans.jadwal.category', $category->name) }}">
                                                    {{ $pelatihan->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main bg-light" id="get">
        <section id="tampilanawal" class="py-4" style="background-color: #b04c87bf;">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 class="text-white">Program Pengembangan Profesional Pelatihan dan Sertifikasi Meraki Institute</h1>
                        <h6 class="my-2">Pelatihan dan Sertifikat Kompetensi sesuai standar BNSP, Kemnaker RI, atau Pelatihan Internal.</h6>
                        <div class="d-flex my-3">
                            <a href="#services" class="col-6 btn btn-lg btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <div class="container" >
                <div class="row gy-4">
                    <div class="col-lg-12 order-2 order-lg-1 d-flex justify-content-between align-items-center bg-light p-3">
                        <div class="text-left">
                            <h4><span style="color: #b04c87bf;">Meraki Institute by</span> </h4>
                            <h4 style="color: #b04c87bf;">PT. Meraki Anugerah Pratama</h4>
                            <p>PT Meraki menyiapkan segala macam pelatihan yang anda butuhkan! <br>Lakukan hal terbaik untuk hasil yang terbaik!</p>
                        </div>

                    </div>
                </div>
            </div>
            <section id="about" class="about section my-3 py-5" style="background-color: #f8f9fa;">
                <div class="container-section-title text-center">
                    <h2>About Us</h2>
                    <hr class="col-1 mx-auto border-dark opacity-100 border-2 mt-3 mb-3">
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
                                                Pelatihan yang Disesuaikan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                Program pelatihan kami dirancang untuk memenuhi kebutuhan spesifik organisasi Anda, memastikan pengalaman belajar yang relevan dan berdampak.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Instruktur Ahli
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                Kursus kami dipimpin oleh para pakar industri dengan pengalaman bertahun-tahun, memberi Anda pengetahuan dan keterampilan yang Anda butuhkan untuk sukses.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Penjadwalan Fleksibel
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#whyUsAccordion">
                                            <div class="accordion-body">
                                                Kami menawarkan pilihan penjadwalan yang fleksibel agar sesuai dengan jadwal sibuk klien kami, memastikan bahwa pelatihan dapat dilakukan pada waktu yang paling sesuai.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 text-center">
                            <img src="assets/Img/web home-100.jpg" class="img-fluid rounded" alt="Why Us">
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="py-5 bg-light">
                <div class="container text-center mb-4">
                    <h2>Pelatihan</h2>
                    <hr class="col-1 mx-auto border-dark opacity-100 border-2 mt-3 mb-3">
                    <p>Pelatihan kami meliputi berbagai kategori pelatihan.</p>

                    <!-- Filter Buttons -->
                    <ul class="nav nav-pills justify-content-center mb-4 g-5" id="filter-buttons">
                        @foreach($categories as $category)
                            <li class="nav-item">
                                <button class="nav-link" onclick="showSection('{{ $category->id }}')">{{ $category->name }}</button>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Dynamic Sections -->
                    @foreach($categories as $category)
                        <div id="{{ $category->id }}" class="filter-section d-none">
                            <div class="row gy-4">
                                @foreach($pelatihans->where('category_id', $category->id) as $pelatihan)
                                    <div class="col-md-4 mb-4">
                                        <img src="{{ asset('storage/' . $pelatihan->image) }}" alt="{{ $pelatihan->title }}" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal{{ $pelatihan->id }}">

                                        <!-- Modal -->
                                        <div class="modal fade" id="imageModal{{ $pelatihan->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $pelatihan->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imageModalLabel{{ $pelatihan->id }}">{{ $pelatihan->title }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $pelatihan->image) }}" alt="{{ $pelatihan->title }}" class="img-fluid mb-3">
                                                        <p>{{ $pelatihan->description }}</p>
                                                        <p><strong>Category:</strong> {{ $pelatihan->category->name ?? 'Uncategorized' }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('pelatihan.show', $pelatihan->id) }}" class="btn btn-primary btn-md">Daftar Sekarang!
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Modal -->
                                    </div>
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
            <section id="portfolio" class="py-5 bg-light">
                <div class="container text-center mb-4">
                    <h2>Portfolio</h2>
                    <hr class="col-1 mx-auto border-dark opacity-100 border-2 mt-3 mb-3">
                    <p>Portfolio kami berisi hasil pelatihan yang telah kami lakukan.</p>
                </div>
                <div class="container mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($slides->chunk(3) as $index => $chunk)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($slides->chunk(3) as $index => $chunk)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach($chunk as $slide)
                                                <div class="col-lg-4 mt-3 d-flex justify-content-center">
                                                    <div class="card">
                                                        <img src="{{ asset('storage/' . $slide->image) }}" class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
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
                    </div>
                </div>
            </section>
            <div class="text-center bg-dark py-5">
                <h4><span class="text-white">Apa yang kalian tunggu?</h4>
                <h4 class="text-white">Segera Mulai!</h4>
                   <a href="pelatihan.html" class="btn btn-primary mx-auto mt-3">Get Started</a>
            </div>
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
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group row mt-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="name" class="mb-1">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="mb-1">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="subject" class="mb-1">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="message" class="mb-1">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3 mb-3 col-lg-12">Send Message</button>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
            <div class="footer-newsletter py-3 mt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <h4>Bergabunglah dengan Buletin Kami</h4>
                            <p>Berlangganan buletin kami dan dapatkan berita terbaru tentang informasi dan layanan kami!</p>
                            <form action="{{ route('subcription.store') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Masukan email-mu" aria-label="Enter your email" aria-describedby="button-subscribe">
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
            <div class="chat-bubble">
                <div class="chat-header">
                    <h2>Hi Meraki People!</h2>
                    <p>Admin kami sedang online, chat untuk memulai diskusi tentang Pelatihan K3.</p>
                </div>
                <div class="chat-body">
                    <div class="chat-account">
                        <img src="path/to/naja-image.jpg" alt="Alive Mulyanto" class="chat-img">
                        <div class="chat-info">
                            <h3>Account Executive</h3>
                            <p>Alive Mulyanto</p>
                            <a href="" class="chat-link">Chat</a>
                        </div>
                    </div>
                    <div class="chat-account">
                        <img src="path/to/ibnu-image.jpg" alt="Firman Wijaya" class="chat-img">
                        <div class="chat-info">
                            <h3>Account Executive</h3>
                            <p>Firman Wijaya</p>
                            <a href="" class="chat-link">Chat</a>
                        </div>
                    </div>
                    <div class="chat-account">
                        <img src="path/to/ibnu-image.jpg" alt="Elita Nur" class="chat-img">
                        <div class="chat-info">
                            <h3>Account Executive</h3>
                            <p>Elita Nur</p>
                            <a href="" class="chat-link">Chat</a>
                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <p>Phone Call: <a href="tel:+6282123113337">0821-2311-3337</a></p>
                </div>
            </div>
            <button type="button" class="btn btn-success btn-md d-flex align-items-center whatsapp-button">
                <a href="#" class="btn btn-success btn-md d-flex align-items-center whatsapp-button">
                    <i class="fab fa-whatsapp me-2"></i>
                    <small>Butuh bantuan? Klik disini!</small>
                </a>
            </button>
            <script>
                document.querySelector('.whatsapp-button').addEventListener('click', function() {
                    const chatBubble = document.querySelector('.chat-bubble');
                    chatBubble.style.display = chatBubble.style.display === 'block' ? 'none' : 'block';
                });

            </script>
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
