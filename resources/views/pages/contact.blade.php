@extends('layouts.main')

@section('title', 'Contact')

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'Contact'])

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Alamat</h3>
                            <p class="text-center">{{ $footer->address }}
                            </p>

                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Telepon</h3>
                            <p>+{{ $footer->phone }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>{{ $footer->email }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.0708235765854!2d106.814818!3d-6.1476227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7234c580fb3%3A0x3c5cbc132a5a1bef!2sPUTRA%20TUNGGAL%20DAYA!5e0!3m2!1sen!2sid!4v1708150800000!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form
                            action="https://wa.me/{{ $footer->phone }}?text=Name:%20YourName%0AEmail:%20YourEmail%0ASubject:%20YourSubject%0AMessage:%20YourMessage"
                            method="get" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

@endsection
