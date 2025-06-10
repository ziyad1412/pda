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
                                @php
                                    $firstImage = $product->images->first();
                                @endphp
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $firstImage->image) }}" class="img-fluid"
                                        alt="{{ $product->title }}">
                                </div>

                                <!-- Gambar Tambahan dari product_images -->
                                @foreach ($productImages->skip(1) as $image)
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
                                            <button class="size-btn btn btn-outline-dark btn-sm"
                                                data-size="{{ $size }}">{{ $size }}</button>
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
                                            <button type="button" class="color-btn btn btn-outline-dark btn-sm"
                                                data-color="{{ $color }}">
                                                {{ ucfirst($color) }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Pilihan Custom -->
                            @php
                                $customs =
                                    !empty($product->custom) && is_array($product->custom)
                                        ? array_filter(Arr::flatten($product->custom)) // Hapus elemen kosong
                                        : [];
                            @endphp

                            @if (!empty($customs))
                                <div class="mb-3">
                                    <h5 class="fw-bold">Pilih Custom:</h5>
                                    <div class="d-flex gap-2 flex-wrap">
                                        @foreach ($customs as $custom)
                                            <button type="button" class="custom-btn btn btn-outline-dark btn-sm"
                                                data-custom="{{ $custom }}">
                                                {{ ucfirst($custom) }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif


                            @if ($product->certificate)
                                <!-- Button Download Dokumen -->
                                <a href="{{ asset('storage/' . $product->certificate) }}" target="_blank"
                                    class="btn btn-outline-primary w-100 mb-3">
                                    <i class="bi bi-download"></i> Download Dokumen
                                </a>
                            @endif

                            <button id="whatsappButton" class="btn btn-success w-100">
                                <i class="bi bi-whatsapp"></i> Order via WhatsApp
                            </button>
                        </div>
                    </div>
                    <!-- End Product Info -->

                    <div>
                        <!-- Spesifikasi Produk -->
                        <div class="mt-4">
                            <h4 class="fw-bold">Spesifikasi Produk</h4>
                            <ul class="list-unstyled">
                                <li><strong>Kategori:</strong>
                                    {{ $product->category->name }}
                                </li>
                                <li><strong>Stok:</strong> {{ $product->stock }}</li>
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



            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const sizeButtons = document.querySelectorAll('.size-btn');
                    const colorButtons = document.querySelectorAll('.color-btn');
                    const customButtons = document.querySelectorAll('.custom-btn');
                    const whatsappButton = document.getElementById('whatsappButton');

                    let selectedSize = '';
                    let selectedColor = '';
                    let selectedCustom = '';

                    function generateLink() {
                        const baseText = `Saya ingin order {{ $product->name }},`;
                        const sizeText = selectedSize ? `\nUkuran: ${selectedSize}` : '';
                        const colorText = selectedColor ? `\nWarna: ${selectedColor}` : '';
                        const customText = selectedCustom ? `\nCustom: ${selectedCustom}` : '';
                        const finalText = encodeURIComponent(baseText + sizeText + colorText + customText);
                        const phone = "{{ $footer->phone }}";

                        return `https://wa.me/${phone}?text=${finalText}`;
                    }

                    whatsappButton.addEventListener('click', function() {
                        const link = generateLink();
                        window.open(link, '_blank');
                    });

                    sizeButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            sizeButtons.forEach(btn => btn.classList.remove('active'));
                            button.classList.add('active');
                            selectedSize = button.dataset.size;
                        });
                    });


                    colorButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            colorButtons.forEach(btn => btn.classList.remove('active'));
                            button.classList.add('active');
                            selectedColor = button.dataset.color;
                        });
                    });

                    customButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            customButtons.forEach(btn => btn.classList.remove('active'));
                            button.classList.add('active');
                            selectedCustom = button.dataset.custom;
                        });
                    });
                });
            </script>







            </div>
        </section><!-- /Product Details Section -->

    </main>

@endsection
