@extends('layouts.template')

@section('title')
    Halaman belanja
@endsection

@section('content')
    <section class="productSlider">
        <div class="container">
            <div class="row my-5 py-5">
                <div class="col-md-8">

                    <div class="card" style="background: #F1F1F1">
                        <div class="card-body py-3">
                            <!-- Slides with controls -->
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('assets/img/carousel/lahan-jagung.jpg') }}"
                                            class="d-block w-100 rounded-2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/carousel/lahan-kedelai.jpg') }}"
                                            class="d-block w-100 rounded-2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('assets/img/carousel/lahan-padi.jpg') }}"
                                            class="d-block w-100 rounded-2">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div>
                            <!-- End Slides with controls -->
                        </div>

                        <div class="card-body d-flex text-center">
                            <div>
                                <img src="{{ asset('assets/img/carousel/lahan-jagung.jpg') }}" width="68%" class="rounded">
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/carousel/lahan-kedelai.jpg') }}" width="100%" class="rounded">
                            </div>
                            <div>
                                <img src="{{ asset('assets/img/carousel/lahan-padi.jpg') }}" width="68%" class="rounded">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card" style="background: #F1F1F1">
                        <div class="card-body p-4 rounded-4" style="border: 1px solid rgb(177, 176, 176)">
                            <div class="card-title">
                                <h5 class="text-center fw-bold" style="color: #1A5653">Komoditas Jagung</h5>
                            </div>
                            <div class="row mb-3">
                                <span>Jumlah petani yang menerima pendanaan</span> <br />
                                <span class="fw-bold h6" style="color: #044786">50.000 Petani</span>
                            </div>
                            <div class="row mb-3">
                                <span>Jumlah petani yang menerima pendanaan komoditas Jagung</span> <br />
                                <span class="fw-bold h6" style="color: #044786">12.000 Petani</span>
                            </div>
                            <hr style="color: #107869; height: 3px;">
                            <div class="row mb-3">
                                <span>Jumlah maksimal pendanaan yang diterima</span> <br />
                                <span class="fw-bold h6" style="color: #044786">Rp. 15.000.000</span>
                            </div>
                            <div class="row mb-3">
                                <span>Jumlah minimal pendanaan yang diterima</span> <br />
                                <span class="fw-bold h6" style="color: #044786">Rp. 10.000.000 Petani</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container sproduct mb-5">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12">
                <div class="card-produkleft">
                    <i class="bi bi-list text-black"></i> Semua
                    <hr>
                    <ul class="m-0 p-0">
                        <li class="list-unstyled"><a href="#" class="text-black">Pupuk</a></li>
                        <li class="list-unstyled"><a href="#" class="text-black">Bibit</a></li>
                        <li class="list-unstyled"><a href="#" class="text-black">Obat-Obatan</a></li>
                        <li class="list-unstyled"><a href="#" class="text-black">Alsintan</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-10 col-md-12 col-12">
                <div class="card-body-product ms-auto m-1 p-1 rounded">
                    <ul class="ms-auto d-flex">
                        <a href="#" class="text-black text-decoration-none ms-4">Populer</a>
                        <a href="#" class="text-black text-decoration-none ms-4">Terbaru</a>
                        <a class="text-black text-decoration-none ms-4">Harga
                            <select class="border-0">
                                <option value=""></option>
                                <option value="">100.000</option>
                                <option value="">200.000</option>
                                <option value="">300.000</option>
                            </select>
                        </a>
                    </ul>
                </div>
                <div class="card-produkright">
                    <div class="col-12">
                        <div class="row">

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="50%"
                                          style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> Nitrea</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> Phonska</span> <br>
                                            <span>Berat: 30 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> Phonska</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> ZK Petro</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA-PLUS-50kg.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> 3D ZA PLUS</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> ZK Petro</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA-PLUS-50kg.png') }}" width="50%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> 3D ZA PLUS</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}

                            {{-- @for ($i = 1; $i <= 10; $i++) --}}
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-2">
                                    <div class="card p-3 rounded-4">
                                        <div class="img-products-cards">
                                          <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA.png') }}" width="60%"
                                            style="display: block; margin: auto">
                                        </div>
                                        <div class="details-produk my-4">
                                            <span>Nama Produk:</span> <span class="fw-bold"> 3D ZA</span> <br>
                                            <span>Berat: 50 Kg</span> <br>
                                            <span style="color: grey">Cibubur</span>

                                        </div>
                                        <div class="d-flex">
                                            <button type="button" class="text-black px-3 py-1 rounded-3 w-100"
                                                style="border: 1px solid #107869" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add to Cart
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                                                Successfull
                                                            </h1>
                                                            <button type="button" class="btn-close btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <i class="bi bi-check-circle fs-1 text-success"></i>
                                                            <p>Produk berhasil ditambahkan ke keranjang belanja</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endfor --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="text-center p-3 foodnote" style="background-color: black; color: white">
            Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
            <img src="{{ asset('../assets/img/izin-ojk.png') }}" alt="ojk" class="img-fluid" width="45">
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
