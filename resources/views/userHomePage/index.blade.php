<<<<<<< HEAD
@extends('layouts.template')

@section('title')
    Halaman home - petani
@endsection

@section('content')
    <section class="jumbotron">
        <div class="container-fluid mt-5 mb-3 pt-4">
            <div class="row m-2 p-3 rounded-4" style="background: #fab042">
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <div class="card-body px-3 my-3 py-3">
                        <div class="card-title">
                            <h1 class="text-white fw-bold title">
                                Dapatkan Pendanaan Pertanian <br> Hingga Rp 100.000.000
                            </h1>
                            <button type="button" style="background-color: #1a5653; font-size: 18px"
                                class="text-white border-0 rounded-4 px-4 py-2 get-now" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Dapatkan
                                Sekarang
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Syarat Pendanaan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('assets/img/File.png') }}" class="mb-3">
                                            <h4>Lengkapi Profile!</h4>
                                            <p>Lengkapi identitas anda terlebih dahulu!</p>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="{{ url('funding') }}"
                                                class="btn text-white px-4 py-2 rounded-2 text-decoration-none"
                                                style="background-color: #1a5653;">
                                                Lengkapi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src="{{ asset('assets/img/gambar-jumbotron-users.png') }}" alt="gambar jumbotron"
                        class="img-fluid w-50" width="60%">
                </div>
            </div>
        </div>
    </section>

    <section class="notification">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center mt-4">
                <div class="col-md-5 text-center">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1 h4"></i>
                        <span class="text-black fw-bold h6">Lengkapi persyaratan profile anda, agar dapat mengajukan
                            pendanaan sesuai komoditas yang dipilih.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comodities">
        <div class="container-fluid my-4">
            <h3 class="fw-semibold text-center">Ajukan Pendanaan Anda</h3>
            <div class="row">
                <p class="fw-semibold h5">Komoditas</p>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                                <img src="{{ asset('assets/img/carousel/img1.png') }}" class="img-fluid rounded-top-4"
                                    alt="komoditas jagung">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Jagung</p>
                                    <hr>
                                    <p>
                                        <span>Total Pendanaan Mencapai:</span> <br />
                                        <span>Rp. 20.000.000</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                                <img src="{{ asset('assets/img/carousel/img2.png') }}" class="img-fluid rounded-top-4"
                                    alt="komoditas kedelai">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Kedelai</p>
                                    <hr>
                                    <p>
                                        <span>Total Pendanaan Mencapai:</span> <br />
                                        <span>Rp. 20.000.000</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                                <img src="{{ asset('assets/img/carousel/img3.png') }}" class="img-fluid rounded-top-4"
                                    alt="komoditas kelapa-sawit">
                                <div class="card-body">
                                    <p class="card-title">Komoditas Sawit</p>
                                    <hr>
                                    <p>
                                        <span>Total Pendanaan Mencapai:</span> <br />
                                        <span>Rp. 20.000.000</span>
                                    </p>
                                </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                        <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                            <img src="{{ asset('assets/img/carousel/img4.png') }}" class="img-fluid rounded-top-4"
                                alt="komoditas padi">
                            <div class="card-body">
                                <p class="card-title">Komoditas Padi</p>
                                <hr>
                                <p>
                                    <span>Total Pendanaan Mencapai:</span> <br />
                                    <span>Rp. 20.000.000</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                        <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                            <img src="{{ asset('assets/img/carousel/img5.png') }}" class="img-fluid rounded-top-4"
                                alt="komoditas cabe">
                            <div class="card-body">
                                <p class="card-title">Komoditas Cabe</p>
                                <hr>
                                <p>
                                    <span>Total Pendanaan Mencapai:</span> <br />
                                    <span>Rp. 20.000.000</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
                        <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
                            <img src="{{ asset('assets/img/carousel/img1.png') }}" class="img-fluid rounded-top-4"
                                alt="komoditas jagung">
                            <div class="card-body">
                                <p class="card-title">Komoditas Jagung</p>
                                <hr>
                                <p>
                                    <span>Total Pendanaan Mencapai:</span> <br />
                                    <span>Rp. 20.000.000</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

        <section class="advantage">
        <div class="container">
            <h3 class="fw-semibold text-center">Keunggulan Ajukan Pendanaan di E-mutan</h3>
            <div class="row my-4">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card p-2 rounded-4">
                <img src="{{ asset('assets/img/user-img/img1.png') }}" class="img-fluid rounded-4 d-block m-auto" alt="terpercaya">
                <div class="card-body">
                    <h5 class="card-title">Terpercaya</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk of the card's
                    content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card p-2 rounded-4">
                <img src="{{ asset('assets/img/user-img/img2.png') }}" class="img-fluid rounded-4 d-block m-auto" alt="kecepatan">
                <div class="card-body">
                    <h5 class="card-title">Cepat</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk of the card's
                    content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card p-2 rounded-4">
                <img src="{{ asset('assets/img/user-img/img3.png') }}" class="img-fluid rounded-4 d-block m-auto" alt="kemudahan">
                <div class="card-body">
                    <h5 class="card-title">Mudah</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk of the card's
                    content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card p-2 rounded-4">
                <img src="{{ asset('assets/img/user-img/img4.png') }}" class="img-fluid rounded-4 d-block m-auto" alt="keuntungan">
                <div class="card-body">
                    <h5 class="card-title">Menguntungkan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the
                    bulk of the card's
                    content.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

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
