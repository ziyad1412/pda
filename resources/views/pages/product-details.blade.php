@extends('layouts.main')

@section('title', 'Product Details')

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'Product Details'])

        <!-- Product Details Section -->
        <section id="product-details" class="project-details section">
            <div class="container" data-aos="fade-up">

                <div class="row align-items-center">
                    <!-- Product Images (Kiri) -->
                    <div class="col-lg-6">
                        <div class="portfolio-details-slider swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                  "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "navigation": {
                                  "nextEl": ".swiper-button-next",
                                  "prevEl": ".swiper-button-prev"
                                },
                                "pagination": {
                                  "el": ".swiper-pagination",
                                  "type": "bullets",
                                  "clickable": true
                                }
                            }
                          </script>
                            <div class="swiper-wrapper">
                                <!-- Gambar Thumbnail Produk -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-fluid"
                                        alt="{{ $product->title }}">
                                </div>

                                <!-- Gambar Tambahan dari product_images -->
                                @foreach ($productImages as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid"
                                            alt="Product Image">
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-pagination"></div>
                        </div>


                    </div>
                    <!-- End Product Images -->

                    <!-- Product Info (Kanan) -->
                    <div class="col-lg-6">
                        <div class="portfolio-description">
                            <h2>{{ $product->name }}</h2>

                            <div class="d-flex align-items-center mb-3">

                                <span class="badge bg-warning px-3 py-2 me-3">{{ $product->category->name }}</span>
                                <span class="text-danger fw-bold fs-3">Rp.
                                    {{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>


                            <!-- Pilihan Ukuran -->
                            @php
                                use Illuminate\Support\Arr;
                                $sizes =
                                    !empty($product->size) && is_array($product->size)
                                        ? array_filter(Arr::flatten($product->size)) // Hapus elemen kosong
                                        : [];
                            @endphp

                            @if (!empty($sizes))
                                <div class="mb-3">
                                    <h5 class="fw-bold">Pilih Ukuran:</h5>
                                    <div class="d-flex gap-2 flex-wrap">
                                        @foreach ($sizes as $size)
                                            <button class="size-btn">{{ $size }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Pilihan Warna -->
                            @php
                                $colors =
                                    !empty($product->color) && is_array($product->color)
                                        ? array_filter(Arr::flatten($product->color)) // Hapus elemen kosong
                                        : [];
                            @endphp

                            @if (!empty($colors))
                                <div class="mb-3">
                                    <h5 class="fw-bold">Pilih Warna:</h5>
                                    <div class="d-flex gap-2 flex-wrap">
                                        @foreach ($colors as $color)
                                            <button class="color-btn" data-color="{{ $color }}"
                                                style="background-color: {{ strtolower($color) }};"></button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif




                            <!-- Button Download Dokumen -->
                            <a href="{{ asset('storage/' . $product->certificate) }}" target="_blank"
                                class="btn btn-outline-primary w-100 mb-3">
                                <i class="bi bi-download"></i> Download Dokumen
                            </a>

                            <!-- Button WhatsApp -->
                            <a id="whatsappButton"
                                href="https://wa.me/{{ $footer->phone }}?text=Saya%20ingin%20order%20{{ urlencode($product->title) }}"
                                class="btn btn-success w-100" target="_blank">
                                <i class="bi bi-whatsapp"></i> Order via WhatsApp
                            </a>
                        </div>
                    </div>
                    <!-- End Product Info -->

                    <div>
                        <!-- Spesifikasi Produk -->
                        <div class="mt-4">
                            <h4 class="fw-bold">Spesifikasi Produk</h4>
                            <ul class="list-unstyled">
                                <li><strong>Kategori:</strong>
                                    Safety Apparel
                                </li>
                                <li><strong>Stok:</strong> 137</li>
                                <li><strong>Merek:</strong> -</li>
                                <li><strong>Fitur Pakaian Pelindung:</strong> Tahan Api, Insulator, Berlapis</li>
                                <li><strong>No. Izin Edar (Alkes, PKRT):</strong> -</li>
                                <li><strong>Dikirim Dari:</strong> Kota Jakarta Barat</li>
                            </ul>
                        </div>

                        <!-- Deskripsi Produk -->
                        <div class="mt-4">
                            <h4 class="fw-bold">Deskripsi Produk</h4>
                            {!! $product->description !!}


                            <p><strong>Bila ada pertanyaan mengenai produk terkait, bisa ditanyakan via chat.</strong></p>

                            <h5 class="fw-bold">Jam Operasional:</h5>
                            <ul class="list-unstyled">
                                <li><strong>Senin - Jumat:</strong> 08.30 - 17.00 WIB</li>
                                <li><strong>Sabtu:</strong> 08.30 - 15.00 WIB</li>
                            </ul>
                            <p><em>*Disarankan untuk membaca info penting terlebih dahulu. Terima kasih.</em></p>
                        </div>

                    </div>
                </div>



            </div>

            <style>
                .size-btn,
                .color-btn {
                    border: 1px solid #ddd;
                    padding: 10px 15px;
                    cursor: pointer;
                    font-size: 16px;
                    border-radius: 5px;
                    transition: all 0.3s ease;
                }

                .size-btn:hover,
                .color-btn:hover,
                .size-btn.active,
                .color-btn.active {
                    border-color: #000;
                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
                    transform: scale(1.05);
                }

                .color-btn {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    padding: 0;
                }
            </style>






            </div>
        </section><!-- /Product Details Section -->

    </main>

@endsection
