@extends('layout.main')
@section('content')
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
@endsection