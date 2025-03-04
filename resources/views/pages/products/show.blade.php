@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($product->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->image) }}" class="d-block w-100"
                                    alt="{{ $product->title }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <h1>{{ $product->title }}</h1>
                <p class="text-muted">Kategori: {{ $product->category->name }}</p>
                <h3 class="text-success">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                <p>{{ $product->description }}</p>

                <a href="https://wa.me/{{ $whatsappNumber->number }}?text=Saya%20tertarik%20dengan%20produk%20{{ $product->title }}"
                    class="btn btn-success" target="_blank">
                    <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
                </a>
            </div>
        </div>
    </div>
@endsection
