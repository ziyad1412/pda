@extends('layouts.main')

@section('title', 'About')

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'About'])


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                            src="{{ asset('template/assets/img/about-ptd.jpg') }}">
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">

                        <div class="our-story">
                            <h4>PT. Putra Tunggal Daya</h4>
                            <h3>Solusi Kebutuhan Safety dan Hardware</h3>
                            <p>PT. Putra Tunggal Daya hadir sebagai solusi terbaik dalam menyediakan alat <b>Safety dan
                                    Hardware Equipment</b> berkualitas tinggi. Dengan pengalaman bertahun-tahun dan riset
                                mendalam, kami memahami bagaimana kebutuhan industri konstruksi, teknik, dan keamanan terus
                                berkembang.</p>

                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Produk berkualitas tinggi dan terjamin
                                        keasliannya</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Pilihan lengkap untuk kebutuhan industri dan
                                        konstruksi</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Pembelian mudah melalui marketplace
                                        terpercaya</span></li>
                            </ul>
                            <p>PTD berkomitmen untuk
                                terus berinovasi dengan menambah produk terbaru guna memenuhi kebutuhan pelanggan di bidang
                                teknik dan keselamatan kerja.</p>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch
                                    Video</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Counter Section -->
        <section id="stats-counter" class="stats-counter section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pencapaian Kami</h2>
                <p>Rekam Jejak Keberhasilan PT Putra Tunggal Daya</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 text-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center w-100 h-100">
                            <span class="stats-number">1000+</span>
                            <i class="bi bi-emoji-smile color-blue"></i>
                            <p>Pelanggan Puas</p>

                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center w-100 h-100">
                            <span class="stats-number">500+</span>
                            <i class="bi bi-people color-orange"></i>
                            <p>Proyek Terselesaikan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center w-100 h-100">
                            <span class="stats-number">24 Jam</span>
                            <i class="bi bi-headset color-green"></i>
                            <p>Layanan Non-Stop</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex flex-column align-items-center w-100 h-100">
                            <span class="stats-number">15+</span>
                            <i class="bi bi-journal-richtext color-pink"></i>
                            <p>Tenaga Profesional</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

        </section><!-- /Stats Counter Section -->


        <!-- Alt Services Section -->
        <section id="alt-services" class="alt-services section">
            <div class="container">
                <div class="row justify-content-around gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('template/assets/img/alt-services.jpg') }}" alt="Layanan PTD">
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h3>Solusi Terbaik untuk Alat Safety & Hardware Equipment</h3>
                        <p>PT. Putra Tunggal Daya hadir sebagai solusi utama untuk kebutuhan alat safety, teknik, dan
                            hardware. Dengan pengalaman bertahun-tahun, kami menyediakan produk berkualitas tinggi yang
                            mendukung keselamatan dan efisiensi kerja, terutama di bidang konstruksi dan teknik.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-shield-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Keamanan & Kesehatan Kerja (K3)</a></h4>
                                <p>Produk kami dirancang untuk memberikan perlindungan maksimal bagi pekerja di berbagai
                                    industri, sesuai dengan standar K3 yang berlaku.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-tools flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Peralatan Teknik Berkualitas</a></h4>
                                <p>Kami menyediakan berbagai alat teknik yang mempermudah pekerjaan Anda, dari alat
                                    konstruksi hingga perlengkapan industri.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-shop flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Marketplace Terpercaya</a></h4>
                                <p>Produk kami tersedia di marketplace seperti <strong>Tokopedia & Shopee</strong> (PTD
                                    Hardware), menjamin kemudahan akses dan keamanan transaksi 100%.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="bi bi-headset flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Dukungan Pelanggan 24 Jam</a></h4>
                                <p>Tim kami siap membantu kapan saja. Jangan ragu untuk menghubungi kami untuk pertanyaan
                                    atau konsultasi produk yang sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>
            </div>
        </section><!-- /Alt Services Section -->



        <!-- Alt Services 2 Section -->
        <section id="alt-services-2" class="alt-services-2 section">
            <div class="container">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3>Kenapa Harus Memilih PTD?</h3>
                        <p>PT. Putra Tunggal Daya terus berinovasi dengan menambah berbagai macam produk terkait alat safety
                            dan hardware. Kami siap menjadi solusi terbaik bagi Anda yang bekerja di bidang konstruksi,
                            teknik, dan industri lainnya.</p>

                        <div class="row">

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-check-circle flex-shrink-0"></i>
                                <div>
                                    <h4>1000+ Pelanggan Puas</h4>
                                    <p>Kepercayaan pelanggan adalah prioritas kami. Ribuan pelanggan telah merasakan manfaat
                                        dari produk berkualitas yang kami sediakan.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-cart-check flex-shrink-0"></i>
                                <div>
                                    <h4>Produk Lengkap & Berkualitas</h4>
                                    <p>Kami menyediakan berbagai pilihan alat safety dan teknik dari brand terpercaya dengan
                                        standar mutu tinggi.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-clock-history flex-shrink-0"></i>
                                <div>
                                    <h4>Pelayanan 24 Jam</h4>
                                    <p>Kami siap melayani Anda kapan saja. Jangan ragu untuk menghubungi kami jika
                                        membutuhkan bantuan atau konsultasi produk.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-lg-6 icon-box d-flex">
                                <i class="bi bi-truck flex-shrink-0"></i>
                                <div>
                                    <h4>Pengiriman Cepat & Aman</h4>
                                    <p>Pesanan Anda akan dikirim dengan cepat dan aman ke seluruh Indonesia, langsung ke
                                        lokasi Anda.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>

                    </div>

                    <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('template/assets/img/features-3-2.jpg') }}" alt="Kenapa Memilih PTD">
                    </div>

                </div>
            </div>
        </section><!-- /Alt Services 2 Section -->



        <!-- Bagian Tim -->
        <section id="team" class="team section">

            <!-- Judul Bagian -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tim Kami</h2>
                <p>Kenali tim profesional yang berdedikasi untuk memberikan layanan terbaik</p>
            </div><!-- Akhir Judul Bagian -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('template/assets/img/team/team-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Walter White</h4>
                            <span>Direktur Utama</span>
                            <p>Berpengalaman dalam manajemen strategis dan pengambilan keputusan untuk pertumbuhan
                                perusahaan</p>
                        </div>
                    </div><!-- Akhir Anggota Tim -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('template/assets/img/team/team-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Sarah Jhonson</h4>
                            <span>Manajer Produk</span>
                            <p>Mengelola pengembangan produk dan inovasi untuk memenuhi kebutuhan pelanggan</p>
                        </div>
                    </div><!-- Akhir Anggota Tim -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('template/assets/img/team/team-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>William Anderson</h4>
                            <span>Chief Technology Officer (CTO)</span>
                            <p>Memimpin inovasi teknologi dan pengembangan sistem untuk efisiensi bisnis</p>
                        </div>
                    </div><!-- Akhir Anggota Tim -->

                </div>

            </div>

        </section><!-- /Bagian Tim -->


    </main>

@endsection
