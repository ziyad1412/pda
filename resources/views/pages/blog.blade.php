@extends('layouts.main')

@section('title', 'Blog')

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'Blog'])

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <div class="container">
                <div class="row gy-4">

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

                                    <a href="{{ route('blog.detail', $article->slug) }}" class="readmore stretched-link">
                                        <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>
                        </div><!-- End post item -->
                    @endforeach

                </div>
            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    {{ $articles->links('pagination::bootstrap-4') }}
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

    </main>

@endsection
