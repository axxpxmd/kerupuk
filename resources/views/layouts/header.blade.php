<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <img src="{{ asset('images/dua-kurma-logo.png') }}" class="img-fluid" width="70" height="70" alt="">
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="{{ route('home') }}">Beranda</a></li>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="#">Tentang Kami</a></li>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="#">Produk</a></li>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="#">Kontak Kami</a></li>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="#"><i class="bi bi-cart" style="font-size: 18px !important"></i></a></li>
                <li><a class="nav-link scrollto h-header text-black fw-500" href="{{ route('login') }}"><i class="bi bi-person-fill" style="font-size: 18px !important"></i></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
