@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <main class="main">

        @include('partials.page-title', ['title' => 'Products'])

        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                            <li data-filter=".filter-{{ Str::slug($category->name) }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


                        @foreach ($products as $product)
                            <div
                                class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ Str::slug($product->category->name) }}">
                                <article class="position-relative h-100 border rounded shadow-sm p-3">

                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-fluid rounded"
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
                                            {{ Str::limit(strip_tags($product->description), 80) }}
                                        </p>

                                        <a href="{{ url('/product-details/' . $product->slug) }}"
                                            class="btn btn-warning text-white fw-bold w-100">
                                            Lihat Produk <i class="bi bi-arrow-right"></i>
                                        </a>

                                    </div>

                                </article>
                            </div>
                        @endforeach

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-safety">
                            <article class="position-relative h-100 border rounded shadow-sm p-3">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('template/assets/img/products/product-Jaket Las Lynx.jpg') }}"
                                        class="img-fluid rounded" alt="Jaket Las Lynx">
                                </div>

                                <div class="post-content d-flex flex-column mt-3">

                                    <h3 class="post-title">
                                        <a href="{{ url('/product-details') }}" class="stretched-link text-dark fw-bold">
                                            Jaket Las Lynx
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <span class="text-danger fw-bold fs-4">Rp. 175.000</span>
                                        <span class="badge bg-warning px-3 py-2">Safety Apparel</span>
                                    </div>

                                    <p class="text-muted">
                                        JAKET SAFETY LAS LYNX Terbuat dari Kulit Suede Super tahan panas & anti goresan.
                                    </p>

                                    <a href="{{ url('/product-details') }}"
                                        class="btn btn-warning text-white fw-bold w-100">
                                        Lihat Produk <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </article>
                        </div><!-- End product item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-protection">
                            <article class="position-relative h-100 border rounded shadow-sm p-3">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('template/assets/img/products/product-Earmuff Pro Gosave.jpg') }}"
                                        class="img-fluid rounded" alt="Earmuff Pro Gosave">
                                </div>

                                <div class="post-content d-flex flex-column mt-3">

                                    <h3 class="post-title">
                                        <a href="{{ url('/product-details') }}" class="stretched-link text-dark fw-bold">
                                            Earmuff Pro Gosave
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <span class="text-danger fw-bold fs-4">Rp. 70.000</span>
                                        <span class="badge bg-warning px-3 py-2">Protection</span>
                                    </div>

                                    <p class="text-muted">
                                        Earmuff Profresional dapat diadjust dan diputar, Kualitas High Quality Plastik.
                                    </p>

                                    <a href="{{ url('/product-details') }}"
                                        class="btn btn-warning text-white fw-bold w-100">
                                        Lihat Produk <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </article>
                        </div><!-- End product item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-safety">
                            <article class="position-relative h-100 border rounded shadow-sm p-3">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('template/assets/img/products/product-Celana Las Lynx.jpg') }}"
                                        class="img-fluid rounded" alt="Celana Las Lynx">
                                </div>

                                <div class="post-content d-flex flex-column mt-3">

                                    <h3 class="post-title">
                                        <a href="{{ url('/product-details') }}" class="stretched-link text-dark fw-bold">
                                            Celana Las Lynx
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <span class="text-danger fw-bold fs-4">Rp. 200.000</span>
                                        <span class="badge bg-warning px-3 py-2">Safety Apparel</span>
                                    </div>

                                    <p class="text-muted">
                                        CELANA SAFETY LAS LYNX Bahan kulit asli, dengan ukuran 107 x 52 cm.
                                    </p>

                                    <a href="{{ url('/product-details') }}"
                                        class="btn btn-warning text-white fw-bold w-100">
                                        Lihat Produk <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </article>
                        </div><!-- End product item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-safety">
                            <article class="position-relative h-100 border rounded shadow-sm p-3">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('template/assets/img/products/product-Jaket Las Lynx.jpg') }}"
                                        class="img-fluid rounded" alt="Jaket Las Lynx">
                                </div>

                                <div class="post-content d-flex flex-column mt-3">

                                    <h3 class="post-title">
                                        <a href="{{ url('/product-details') }}" class="stretched-link text-dark fw-bold">
                                            Jaket Las Lynx
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <span class="text-danger fw-bold fs-4">Rp. 175.000</span>
                                        <span class="badge bg-warning px-3 py-2">Safety Apparel</span>
                                    </div>

                                    <p class="text-muted">
                                        JAKET SAFETY LAS LYNX Terbuat dari Kulit Suede Super tahan panas & anti goresan.
                                    </p>

                                    <a href="{{ url('/product-details') }}"
                                        class="btn btn-warning text-white fw-bold w-100">
                                        Lihat Produk <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </article>
                        </div><!-- End product item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-protection">
                            <article class="position-relative h-100 border rounded shadow-sm p-3">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset('template/assets/img/products/product-Earmuff Pro Gosave.jpg') }}"
                                        class="img-fluid rounded" alt="Earmuff Pro Gosave">
                                </div>

                                <div class="post-content d-flex flex-column mt-3">

                                    <h3 class="post-title">
                                        <a href="{{ url('/product-details') }}" class="stretched-link text-dark fw-bold">
                                            Earmuff Pro Gosave
                                        </a>
                                    </h3>

                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <span class="text-danger fw-bold fs-4">Rp. 70.000</span>
                                        <span class="badge bg-warning px-3 py-2">Protection</span>
                                    </div>

                                    <p class="text-muted">
                                        Earmuff Profresional dapat diadjust dan diputar, Kualitas High Quality Plastik.
                                    </p>

                                    <a href="{{ url('/product-details') }}"
                                        class="btn btn-warning text-white fw-bold w-100">
                                        Lihat Produk <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </article>
                        </div><!-- End product item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Projects Section -->

    </main>
@endsection
