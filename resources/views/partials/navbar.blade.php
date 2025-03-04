<header id="header" class="header d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img class="sitename" src="{{ asset('template/assets/img/logo-nav.png') }}" alt=""
                style="max-height: 70px;">

        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Tentang Kami</a>
                </li>

                <li><a href="{{ url('/products') }}" class="{{ request()->is('products') ? 'active' : '' }}">Produk
                        Kami</a></li>
                <li><a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Artikel</a></li>
                <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Kontak</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
