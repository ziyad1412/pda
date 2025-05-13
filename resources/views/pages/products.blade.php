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

                </div>

            </div>

        </section><!-- /Projects Section -->


        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section><!-- /Blog Pagination Section -->

        <style>
            .pagination .page-item.active .page-link {
                background-color: #ffc107;
                /* Warna sesuai tema */
                color: white;
                border-color: #ffc107;
            }
        </style>

        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var grid = document.querySelector('.isotope-container');
                if (grid) {
                    var iso = new Isotope(grid, {
                        itemSelector: '.isotope-item',
                        layoutMode: 'masonry'
                    });

                    // Event listener untuk filter klik
                    var filters = document.querySelectorAll('.portfolio-filters li');
                    filters.forEach(function(filter) {
                        filter.addEventListener('click', function() {
                            var filterValue = filter.getAttribute('data-filter');
                            console.log("Filter dipilih:",
                                filterValue); // Cek di console apakah event jalan
                            iso.arrange({
                                filter: filterValue
                            });

                            // Tambahkan class aktif ke filter yang dipilih
                            filters.forEach(f => f.classList.remove('filter-active'));
                            filter.classList.add('filter-active');
                        });
                    });
                } else {
                    console.error("Isotope container tidak ditemukan!");
                }
            });
        </script>


    </main>
@endsection
