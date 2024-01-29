<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Emutan merupakan sebuah platform yang digunakan untuk para petani supaya lebih mudah mendapatkan produk pertanian, pupuk, bibit, obat-obatan serta alsintan dengan mudah, cepat dan terpercaya">
    <meta name="keywords" content="Emutan, Pertanian, Produk Pertanian, Pupuk, Bibit, Obat-obatan dan Alsintan, Pendanaan">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <title>Emutan | @yield('title')</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          {{-- link utama website emutan --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/emutanlg.png') }}" alt="logo" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Manajemen Sistem</a></li>
                            <li><a class="dropdown-item" href="#">Sustainable Market</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('skorings') }}">Skoring</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('pupuks') }}">Pupuk</a></li>
                            <li><a class="dropdown-item" href="{{ url('bibits') }}">Bibit</a></li>
                            <li><a class="dropdown-item" href="{{ url('obatans') }}">Obat-Obatan</a></li>
                            <li><a class="dropdown-item" href="{{ url('alsintans') }}">Alsintan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Komoditas</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('cabes') }}">Cabe</a></li>
                            <li><a class="dropdown-item" href="{{ url('kedelais') }}">Kedelai</a></li>
                            <li><a class="dropdown-item" href="{{ url('jagungs') }}">Jagung</a></li>
                            <li><a class="dropdown-item" href="{{ url('kelapasawits') }}">Kelapa Sawit</a></li>
                            <li><a class="dropdown-item" href="{{ url('padis') }}">Padi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('contacts') }}">Kontak Kami</a></li>
                            <li><a class="dropdown-item" href="{{ url('abouts') }}">Tentang Kami</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link text-black"
                            href="{{ url('blogs') }}">Blogs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="line-space"></div>
                    </li>
                    <li class="nav-item dropdown login"><a class="nav-link text-black"
                            href="{{ url('login') }}">Masuk</a></li>
                    <li class="nav-item dropdown signup"><a class="nav-link text-black"
                            href="{{ url('register') }}">Daftar</a></li>
                    <li class="nav-item dropdown-lg">
                        <i class="bi bi-globe text-black"></i>
                        <select class="bg-light text-black border-0">
                            <option value="id">Indonesia</option>
                            <option value="en">English</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- EndNavbar --}}

    {{-- Content --}}
    @yield('content')
    {{-- EndContent --}}

</body>

</html>
