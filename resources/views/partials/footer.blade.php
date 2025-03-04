<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Putra Tunggal Daya</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>{{ $footer->address }}</p>
                    <p class="mt-3"><strong>Telepon:</strong> <span>+{{ $footer->phone }}</span></p>
                    <p><strong>Email:</strong> <span>{{ $footer->email }}</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="{{ $footer->facebook }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $footer->instagram }}"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Tautan Penting</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/products') }}">Produk Kami</a></li>
                    <li><a href="{{ url('/blog') }}">Artikel</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                    <li><a href="#">Peralatan Keselamatan Kerja (K3)</a></li>
                    <li><a href="#">Alat Teknik dan Konstruksi</a></li>
                    <li><a href="#">Peralatan Kelistrikan & Mekanikal</a></li>
                    <li><a href="#">Pemeliharaan & Perbaikan</a></li>
                    <li><a href="#">Solusi Infrastruktur & Konstruksi</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 footer-links">
                <h4>Mitra Kami</h4>
                <ul>
                    <li><a href="#">Instalasi Listrik Industri</a></li>
                    <li><a href="#">Sistem Bangunan Komersial</a></li>
                    <li><a href="#">Solusi Energi Terbarukan</a></li>
                    <li><a href="#">Sistem HVAC & Pendinginan</a></li>
                    <li><a href="#">Otomasi Pabrik & Kontrol</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Putra Tunggal Daya</strong> <span>All Rights
                Reserved</span></p>
    </div>

</footer>
