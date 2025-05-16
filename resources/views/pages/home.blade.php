@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

    <style>
        :root {
            --nav-color: rgba(0, 0, 0, 0.724);
            --nav-hover-color: #000000;
        }
    </style>

    <main class="main">
        <!-- Hero Section -->

        <section id="hero" class="hero section dark-background">
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                @foreach ($sliders as $index => $slider)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider">
                    </div>
                @endforeach

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>

        </section><!-- /Hero Section -->
        @include('partials.announcement')

        <!-- Constructions Section -->
        <section id="constructions" class="constructions section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kenapa Memilih Putra Tunggal Daya?</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="{{ asset('template/assets/img/constructions-1.jpg') }}"
                                            class="img-fluid" alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Berpengalaman</h4>
                                        <p>Dengan pengalaman bertahun-tahun di industri Safety dan Alat Teknik, kami
                                            memahami setiap kebutuhan pelanggan dan selalu memberikan solusi terbaik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="{{ asset('template/assets/img/constructions-2.jpg') }}"
                                            alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Selalu Berkembang & Inovatif</h4>
                                        <p>Kami terus menghadirkan produk terbaru dan inovatif agar Anda selalu mendapatkan
                                            perlengkapan terbaik sesuai dengan perkembangan industri.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="{{ asset('template/assets/img/constructions-3.jpg') }}"
                                            alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Stok Terjamin & Berkualitas</h4>
                                        <p>Jangan khawatir kehabisan! Kami menyediakan stok produk asli dalam jumlah besar,
                                            siap dikirim kapan saja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg"><img src="{{ asset('template/assets/img/constructions-4.jpg') }}"
                                            alt=""></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Pelayanan Cepat & Profesional</h4>
                                        <p>Tim kami siap membantu Anda dengan respons cepat, memberikan rekomendasi terbaik,
                                            serta memastikan pengalaman belanja yang nyaman dan terpercaya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Constructions Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-truck"></i>
                            </div>
                            <h3>Bebas Ongkir</h3>
                            <p>Nikmati pengiriman gratis ke berbagai wilayah dengan opsi bebas ongkir yang memudahkan
                                belanja Anda. Hemat lebih banyak tanpa biaya tambahan!</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <h3>Respon Cepat 24/7</h3>
                            <p>Tim kami siap melayani Anda kapan saja! Butuh info produk atau konsultasi? Kami akan
                                merespons dengan cepat untuk memastikan kepuasan Anda.</p>

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <h3>100% Pembayaran Aman</h3>
                            <p>Belanja tanpa khawatir! Kami memastikan setiap transaksi aman, terpercaya, dan sesuai dengan
                                produk yang Anda pesan.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Tersedia di Marketplace -->
        <section id="marketplaces" class="marketplaces section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Toko Kami Tersedia di</h2>
            </div>

            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item text-center">
                            <a href="https://www.tokopedia.com/ptdhardware" target="_blank">
                                <img src="{{ asset('template/assets/img/tokped.jpg') }}" alt="Tokopedia"
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item text-center">
                            <a href="https://shopee.co.id/ptdhardware" target="_blank">
                                <img src="{{ asset('template/assets/img/shopee.jpg') }}" alt="Shopee"
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Alt Services Section -->
        <section id="alt-services" class="alt-services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Visi Misi Kami</h2>
            </div>
            <div class="container">
                <div class="row justify-content-around gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('template/assets/img/alt-services.jpg') }}" alt="Keamanan dan Keselamatan PTD">
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <h3>Solusi Keamanan dan Keselamatan Terbaik untuk Pekerja Profesional</h3>
                        <p>Kami di PTD berkomitmen untuk menyediakan perlengkapan pelindung terbaik, memastikan keselamatan
                            dan kenyamanan di setiap lingkungan kerja. Dari industri konstruksi hingga manufaktur, kami siap
                            melindungi Anda.</p>

                        <div class="vision-mission">
                            <h4>Visi</h4>
                            <p>Menjadi perusahaan dengan reputasi nasional serta menjadi market leader, khususnya di bidang
                                peralatan safety equipment dan hardware.</p>

                            <h4>Misi</h4>
                            <ul>
                                <li>Selalu menjaga ketersediaan produk dan kualitas serta memberikan harga terbaik dan
                                    kompetitif kepada pelanggan.</li>
                                <li>Berusaha terus memberikan pengalaman positif kepada pelanggan dengan berlandaskan etika
                                    moral dan tetap berinovasi.</li>
                                <li>Menciptakan tenaga kerja profesional dengan meningkatkan kompetensi dan kesejahteraan.
                                </li>
                            </ul>
                        </div>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-shield-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Perlindungan Maksimal</a></h4>
                                <p>Dapatkan alat pelindung diri berkualitas tinggi yang dirancang untuk memberikan keamanan
                                    tanpa kompromi di lingkungan kerja yang berisiko tinggi.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-tools flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Kenyamanan Tanpa Batas</a></h4>
                                <p>Produk kami tidak hanya melindungi, tetapi juga memberikan kenyamanan dan fleksibilitas
                                    agar Anda tetap produktif sepanjang hari.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-box-seam flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Produk Berkualitas</a></h4>
                                <p>Setiap produk telah melewati standar keamanan internasional untuk memastikan daya tahan
                                    dan performa terbaik.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-people flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Kepercayaan Pelanggan</a></h4>
                                <p>Dipercaya oleh berbagai industri, dari konstruksi hingga manufaktur, untuk memberikan
                                    solusi keamanan terbaik.</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Alt Services Section -->



        <!-- Features Section -->
        <!-- Produk Unggulan PTD -->
        <section id="features" class="features section">

            <div class="container">

                <ul class="nav nav-tabs row g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1"
                            aria-selected="true" role="tab">
                            <h4>Alat Pelindung Diri</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false"
                            tabindex="-1" role="tab">
                            <h4>Keamanan Kerja</h4>
                        </a><!-- End tab nav item -->
                    </li>

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false"
                            tabindex="-1" role="tab">
                            <h4>Proteksi dan Keselamatan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false"
                            tabindex="-1" role="tab">
                            <h4>Perlengkapan Tambahan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Alat Pelindung Diri</h3>
                                <p>Peralatan yang digunakan untuk melindungi pekerja dari risiko cedera di lingkungan kerja.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Safety Apparel</span></li>
                                    <span>Pakaian pelindung yang dirancang untuk melindungi pekerja dari risiko kecelakaan
                                        kerja, seperti baju tahan api dan coverall.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Sepatu Safety</span></li>
                                    <span>Sepatu dengan fitur pelindung seperti besi di ujungnya untuk mencegah cedera
                                        akibat benda berat atau tajam.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Fall Safety Harness</span></li>
                                    <span>Sabuk pengaman untuk mencegah jatuh dari ketinggian saat bekerja di proyek
                                        konstruksi atau industri.</span>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('template/assets/img/features-1.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Keamanan Kerja</h3>
                                <p>Peralatan yang membantu meningkatkan keselamatan dan kenyamanan dalam bekerja.</p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Helm Proyek Safety</span></li>
                                    <span>Helm pelindung kepala dari benturan dan jatuhan benda berat di lokasi konstruksi
                                        atau industri</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Jas Hujan</span></li>
                                    <span>Pelindung tubuh dari hujan yang tetap memberikan kenyamanan dan mobilitas bagi
                                        pekerja di lapangan.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Kacamata Safety</span></li>
                                    <span>Melindungi mata dari debu, percikan bahan kimia, atau serpihan benda keras saat
                                        bekerja.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Welding Las Protection</span></li>
                                    <span>Pelindung mata dan tubuh dari percikan api serta sinar UV yang dihasilkan saat
                                        proses pengelasan.</span>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('template/assets/img/features-2.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Proteksi dan Keselamatan</h3>
                                <p>Peralatan untuk perlindungan tubuh dari bahaya di tempat kerja.</p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Sarung Tangan</span></li>
                                    <span>Melindungi tangan dari bahan kimia, panas, dan benda tajam saat bekerja</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Masker Safety</span></li>
                                    <span>Menyaring udara dari debu, gas berbahaya, dan partikel kecil lainnya untuk
                                        perlindungan pernapasan.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Ear Protection</span></li>
                                    <span>Peredam suara untuk melindungi telinga dari kebisingan tinggi di lingkungan
                                        industri.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Face Shield</span></li>
                                    <span>Pelindung wajah transparan yang melindungi dari percikan cairan atau partikel
                                        kecil saat bekerja.</span>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('template/assets/img/features-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Perlengkapan Tambahan</h3>
                                <p>Produk tambahan yang menunjang keamanan dan kelancaran kerja.</p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Fire Fighter Pemadam</span></li>
                                    <span>Peralatan dan pakaian khusus untuk perlindungan petugas pemadam kebakaran saat
                                        bertugas.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Traffic Sign</span></li>
                                    <span>Rambu-rambu lalu lintas dan tanda peringatan untuk meningkatkan keamanan di area
                                        kerja atau jalan.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Webbing Sling</span></li>
                                    <span>Tali pengangkat yang kuat untuk mengangkat beban berat dengan aman di industri dan
                                        konstruksi.</span>
                                    <li><i class="bi bi-check2-all"></i> <span>Cargo Lashing</span></li>
                                    <span>Tali atau pengikat khusus untuk mengamankan barang agar tidak bergeser saat
                                        transportasi.</span>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('template/assets/img/features-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>

        </section><!-- /Produk Unggulan PTD -->


        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Produk Kami</h2>
                <p>Temukan berbagai produk unggulan kami yang dirancang untuk mendukung keselamatan dan efisiensi kerja
                    Anda.</p>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


                        @foreach ($products as $product)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ Str::slug($product->category->name) }}">
                                <article class="position-relative h-100 border rounded shadow-sm p-3">

                                    <div class="post-img position-relative overflow-hidden">
                                        @php
                                            $firstImage = $product->images->first();
                                        @endphp
                                        <img src="{{ asset('storage/' . $firstImage->image) }}" class="img-fluid rounded"
                                            alt="{{ $product->name }}">
                                    </div>

                                    <div class="post-content d-flex flex-column mt-3">

                                        <h3 class="post-title">
                                            <a href="{{ url('/product-details/' . $product->slug) }}"
                                                class="stretched-link text-dark fw-bold">
                                                {{ $product->name }}
                                            </a>
                                        </h3>

                                        <div class="d-flex justify-content-between align-items-center my-2">
                                            <span class="text-danger fw-bold fs-4">Rp.
                                                {{ number_format($product->price, 0, ',', '.') }}</span>
                                            <span class="badge bg-warning px-3 py-2">{{ $product->category->name }}</span>
                                        </div>

                                        <p class="text-muted">
                                            {{ Str::limit(strip_tags($product->description), 70) }}
                                        </p>

                                        <a href="{{ url('/product-details/' . $product->slug) }}"
                                            class="btn btn-warning text-white fw-bold w-100">
                                            Lihat Produk <i class="bi bi-arrow-right"></i>
                                        </a>

                                    </div>

                                </article>
                            </div>
                        @endforeach




                    </div><!-- End Portfolio Container -->
                    <div class="text-center mt-4">
                        <a href="{{ url('/products') }}" class="fw-bold btn btn-warning text-white">Lihat Semua
                            Produk</a>
                    </div>

                </div>

            </div>

        </section><!-- /Projects Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimoni Pelanggan</h2>
                <p>Keamanan dan kenyamanan kerja adalah prioritas utama kami. Lihat apa yang pelanggan kami katakan tentang
                    produk kami.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 2,
              "spaceBetween": 20
            }
          }
        }
      </script>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const swiper = new Swiper(".init-swiper", {
                                loop: true,
                                speed: 600,
                                autoplay: {
                                    delay: 5000
                                },
                                slidesPerView: "auto",
                                pagination: {
                                    el: ".swiper-pagination",
                                    type: "bullets",
                                    clickable: true
                                },
                                breakpoints: {
                                    320: {
                                        slidesPerView: 1,
                                        spaceBetween: 40
                                    },
                                    1200: {
                                        slidesPerView: 2,
                                        spaceBetween: 20
                                    }
                                }
                            });
                        });
                    </script>

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">

                                    <h3>Rudi Hartono</h3>
                                    <h4>Manajer Proyek Konstruksi</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Produk dari PTD sangat berkualitas! Helm dan sepatu safety yang kami beli
                                            sangat nyaman dipakai dan memberikan perlindungan maksimal untuk tim di
                                            lapangan. Pelayanan cepat dan harga kompetitif!</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <h3>Andi Wijaya</h3>
                                    <h4>Supervisor Pabrik</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Sudah langganan bertahun-tahun dengan PTD. Produk safety mereka sangat tahan
                                            lama dan berkualitas tinggi. Karyawan kami merasa lebih aman dan nyaman selama
                                            bekerja. Highly recommended!</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">

                                    <h3>Siti Nuraini</h3>
                                    <h4>HRD Perusahaan Manufaktur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Perusahaan kami sangat puas dengan layanan PTD. Selain produk berkualitas
                                            tinggi, pengiriman cepat dan respon customer service sangat profesional. Harga
                                            pun sangat bersaing dibandingkan dengan supplier lain.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">

                                    <h3>Rizal Pratama</h3>
                                    <h4>Teknisi Lapangan</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Setelah mencoba berbagai produk safety dari beberapa brand, akhirnya saya
                                            menemukan yang paling cocok di PTD. Nyaman, aman, dan harganya sangat sesuai
                                            dengan kualitasnya. Terima kasih PTD!</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">

                                    <h3>Budi Santoso</h3>
                                    <h4>Pengusaha Peralatan Safety</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Sebagai distributor, saya sangat puas dengan produk dari PTD. Kualitas selalu
                                            terjaga, harga bersaing, dan stok selalu tersedia. Sangat cocok untuk usaha dan
                                            pelanggan pun puas!</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->


        <!-- Recent Blog Posts Section -->
        <section id="recent-blog-posts" class="recent-blog-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Artikel Terbaru</h2>
                <p>Dapatkan informasi, tips, dan berita terbaru seputar alat safety, teknik, dan hardware yang bisa membantu
                    pekerjaan Anda.</p>

            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    @foreach ($articles as $article)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid"
                                        alt="{{ $article->title }}">
                                    <span
                                        class="post-date">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">
                                    <h3 class="post-title">{{ $article->title }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="{{ url('/blog/' . $article->slug) }}" class="readmore stretched-link">
                                        <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>
                        </div>
                    @endforeach



                </div>

            </div>

        </section><!-- /Recent Blog Posts Section -->

    </main>
@endsection
