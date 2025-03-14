<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/logo3.jpg') }}" rel="icon">
    <link href="{{ asset('template/assets/img/logo3.jpg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox@1.0.8/dist/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->


    @include('partials.navbar')

    <!-- Main Content -->
    <main class="main">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/{{ $footer->phone }}?text=Halo, Putra Tunggal Daya... saya ingin bertanya" target="_blank"
        id="whatsapp-button" class="whatsapp-button d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
        <span>Kontak Kami</span>
    </a>



    <!-- Vendor JS Files -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/purecounterjs@1.5.0/dist/purecounter_vanilla.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
</body>

</html>
