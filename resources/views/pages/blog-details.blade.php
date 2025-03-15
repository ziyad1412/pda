@extends('layouts.main')

@section('title', $article->title)

@section('content')

    <main class="main">

        @include('partials.page-title', ['title' => 'Blog Details'])

        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div class="post-img">
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                        class="img-fluid">
                                </div>

                                <h2 class="title">{{ $article->title }}</h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <span>Admin
                                                PTD</span></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                            <time
                                                datetime="{{ $article->created_at }}">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</time>
                                        </li>

                                    </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                    {!! $article->content !!}
                                </div><!-- End post content -->



                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->
                </div>
            </div>
        </div>
    </main>

    <style>
        .content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>

@endsection
