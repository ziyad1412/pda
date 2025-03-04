@extends('layouts.main')

@section('title', 'Blog')

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'Blog'])

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

            <div class="container">
                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-1.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-2.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-3.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-4.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-5.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('template/assets/img/blog/blog-6.jpg') }}" class="img-fluid"
                                    alt="Artikel Terbaru">
                                <span class="post-date">12 Desember</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">Tips Memilih Alat Safety yang Tepat untuk Proyek Anda</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin PTD</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Safety & Teknik</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{ url('/blog-details') }}" class="readmore stretched-link">
                                    <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>
            </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul>
                        <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>

        </section><!-- /Blog Pagination Section -->

    </main>

@endsection
