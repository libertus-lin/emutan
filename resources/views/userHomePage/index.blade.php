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
              Dapatkan Produk Pertanian Dengan <br> Mudah, Cepat dan Terpercaya. <br> Klik <strong style="color: #1a5653">Dapatkan
                Sekarang</strong>
            </h1>
            <button type="button" style="background-color: #1a5653; font-size: 18px"
              class="text-white border-0 rounded-4 px-4 py-2 get-now" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">
              Dapatkan
              Sekarang
            </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Syarat Pendanaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    <img src="{{ asset('assets/img/File.png') }}" class="mb-3">
                    <h4>Lengkapi Profile!</h4>
                    <p>Lengkapi identitas anda terlebih dahulu!</p>
                  </div>
                  <div class="modal-body text-center">
                    <a href="{{ url('funding') }}" class="btn text-white px-4 py-2 rounded-2 text-decoration-none"
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
        <img src="{{ asset('assets/img/gambar-jumbotron-users.png') }}" alt="gambar jumbotron" class="img-fluid w-50"
          width="60%">
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
          <span class="text-black h6">Lengkapi persyaratan profile anda, agar dapat mengajukan
            pendanaan sesuai komoditas yang dipilih.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="comodities">
  <div class="container-fluid my-5 py-5">
    <div class="row">
      <p class="fw-semibold h5">Komoditas</p>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
              <img src="{{ asset('assets/img/carousel/lahan-jagung.jpg') }}" class="img-fluid rounded-top-4 w-100"
                alt="komoditas jagung" style="height: 260px;">
              <div class="card-body">
                <h5 class="text-dark fw-bold my-3">Komoditas Jagung</h5>
                <p>
                  <span>Total Pendanaan Mencapai:</span> <br />
                  <span class="fw-bold" style="color: #1a5653">Rp. 20.000.000</span>
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
              <img src="{{ asset('assets/img/carousel/lahan-kedelai.jpg') }}" class="img-fluid rounded-top-4"
                alt="komoditas kedelai" style="height: 260px">
              <div class="card-body">
                <h5 class="text-dark fw-bold my-3">Komoditas Kedelai</h5>
                <p>
                  <span>Total Pendanaan Mencapai:</span> <br />
                  <span class="fw-bold" style="color: #1a5653">Rp. 20.000.000</span>
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="item">
          <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
            <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
              <img src="{{ asset('assets/img/carousel/lahan-sawit.jpg') }}" class="img-fluid rounded-top-4"
                alt="komoditas kelapa-sawit" style="height: 260px">
              <div class="card-body">
                <h5 class="text-dark fw-bold my-3">Komoditas Sawit</h5>
                <p>
                  <span>Total Pendanaan Mencapai:</span> <br />
                  <span class="fw-bold" style="color: #1a5653">Rp. 20.000.000</span>
                </p>
              </div>
          </a>
        </div>
      </div>
      <div class="item">
        <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
          <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
            <img src="{{ asset('assets/img/carousel/lahan-padi.jpg') }}" class="img-fluid rounded-top-4" alt="komoditas padi" style="height: 260px;">
            <div class="card-body">
              <h5 class="text-dark fw-bold my-3">Komoditas Padi</h5>
              <p>
                <span>Total Pendanaan Mencapai:</span> <br />
                <span class="fw-bold" style="color: #1a5653">Rp. 20.000.000</span>
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="{{ url('sellerDashbaords') }}" class="text-decoration-none text-black">
          <div class="card border-0 rounded-4" style="border: 1px solid  rgb(204, 204, 204)">
            <img src="{{ asset('assets/img/carousel/lahan-cabe.jpg') }}" class="img-fluid rounded-top-4 w-100" alt="komoditas cabe" style="height: 261px">
            <div class="card-body">
              <h5 class="text-dark fw-bold my-3">Komoditas Cabe</h5>
              <p>
                <span>Total Pendanaan Mencapai:</span> <br />
                <span class="fw-bold" style="color: #1a5653">Rp. 20.000.000</span>
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
    <h4 class="text-center">Keunggulan Ajukan Pendanaan di E-mutan</h4>
    <div class="row my-4">
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card p-2 rounded-4">
          <img src="{{ asset('assets/img/user-img/img1.png') }}" class="img-fluid m-auto p-2"
            alt="terpercaya" style="height: 145px;">
          <div class="card-body">
            <h6 class="fw-bold text-center my-3" style="color: #1a5653">Terpercaya</h6>
            <p class="card-text">Produk-produk yang tersedia di platform kami adalah produk-produk yang baik, berkualitas dan terpercaya.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card p-2 rounded-4">
          <img src="{{ asset('assets/img/user-img/img2.png') }}" class="img-fluid m-auto p-2"
            alt="kecepatan">
          <div class="card-body">
            <h6 class="fw-bold text-center my-3" style="color: #1a5653">Cepat</h6>
            <p class="card-text">Selain terpercaya, proses pembelian produk pada platform yang kami sediakan di jamin cepat.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card p-2 rounded-4">
          <img src="{{ asset('assets/img/user-img/img3.png') }}" class="img-fluid m-auto p-2"
            alt="kemudahan">
          <div class="card-body">
            <h6 class="fw-bold text-center my-3" style="color: #1a5653">Mudah</h6>
            <p class="card-text">Mudahnya dalam mendapatkan produk-produk pertanian yang di inginkan.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card p-2 rounded-4">
          <img src="{{ asset('assets/img/user-img/img4.png') }}" class="img-fluid m-auto p-2"
            alt="keuntungan" style="height: 157px;">
          <div class="card-body">
            <h6 class="fw-bold text-center my-3" style="color: #1a5653">Menguntungkan</h6>
            <p class="card-text">Selain prosesnya yang cepat, mudah dan terpercaya, juga menguntungkan.</p>
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
