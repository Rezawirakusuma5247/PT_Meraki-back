@extends('layout.main')
@section('content')
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
    /* contact information */
    .contact-container {
        display: flex;
        justify-content: space-between;
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
    }
    .contact-info {
        flex: 1;
        padding: 20px;
    }
    .contact-form {
        flex: 1;
        padding: 20px;
        background-color: #d2a2bb;
        border-radius: 10px;
    }
    .contact-form input,
    .contact-form textarea {
        margin-bottom: 15px;
        background-color: #f8f9fa;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .contact-form .btn {
        width: 100%;
        background-color: #007bff;
        color: white;
    }
    .btn-primary {
        background-color: #989FC1;
        border: none;
        text-align: center;
    }
</style>
   <section id="contact" class="contact section dark-background mt-5">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p>Jika anda ingin menghubungi kami, silahkan isi form di samping.</p>
                <h3>Kontak Meraki Institute</h3>
                <p><i class="bi bi-whatsapp"></i> 0812-8552-7615</p>
                <h3>Call Us</h3>
                <p><i class="bi bi-telephone"></i> 0251-754-9585</p>
                <h3>Email Us</h3>
                <p><i class="bi bi-envelope"></i> info@merakip.com</p>
            </div>
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="POST" class="text-white">
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
            <div class="text-center mt-4">
                <p>ATAU HUBUNGI KAMI</p>
                <p>Anda Ingin mendaftar pelatihan dengan MUDAH & CEPAT? Hubungi kami sekarang juga!</p>
                <p>Phone: 0251-754-9585<br>Email: info@merakiap.com</p>
                <a href="tel:+622517549585" class="btn btn-warning mr-2">Phone</a>
                <a href="https://wa.me/6281285527615" class="btn btn-success">WhatsApp</a>
            </div>
        </div>
    </div>

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

</section>
@endsection
