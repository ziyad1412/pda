@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Produk</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $product->images->first()->image ?? 'default.jpg') }}"
                            class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <a href="{{ route('products.show', $product->slug) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Hapus produk ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
