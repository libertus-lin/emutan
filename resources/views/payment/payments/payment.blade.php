@extends('layouts.template')

@section('title')
Halaman pembayaran
@endsection

@section('content')
<section class="container my-5 py-5">
  <div class="card m-5 auto">
    <div class="card-body text-center">
      <a href="{{ url('paymentStatus') }}">
        <img src="{{ asset('assets/img/loading-payment.png') }}" alt="loading pembarayan" class="mb-5">
      </a>

      <h3>Tunggu Sebentar ya...</h3>
      <span class="fs-6" style="color: grey">Pembayaranmu sedang diproses</span>
    </div>
  </div>
</section>

<!-- /* ===== #FOOTER ===== */ -->
<footer>
  <div class="disclamer-section">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-sm-12 col-md-2" id="logo-footer">
          <img class="img-fluid" src="{{ asset('../assets/img/emutanlg.png') }}" alt="logo">
        </div>
        <div class="col-sm-12 col-md-3 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Contact Us</p>
            <span>PT. Emutan</span>
            <span>Jl. Lewinanggung RT.11/RW.03, Depok, Jawa Barat.</span>
            <a href="#" class="text-decoration-none text-dark">pt.emutan@asia</a> <br>
            <a href="#" class="text-decoration-none text-dark">021-341-560</a> <br><br>
            <div class="media-sosial mb-3">
              <a href="#" class="text-decoration-none text-primary">Find join us</a> <br>
              <div class="icons mt-3">
                <i class="bi bi-facebook h5"></i>
                <i class="bi bi-twitter h5"></i>
                <i class="bi bi-linkedin h5"></i>
                <i class="bi bi-instagram h5"></i>
                <i class="bi bi-youtube h5"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Pendanaan</p>
            <a href="#" class="nav-link text-decoration-none">Petani</a>
            <a href="#" class="nav-link text-decoration-none">Supplier</a>
            <a href="#" class="nav-link text-decoration-none">Obtaker</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Categories</p>
            <a href="#" class="nav-link text-decoration-none">Finance</a>
            <a href="#" class="nav-link text-decoration-none">Manajemen Sistem</a>
            <a href="#" class="nav-link text-decoration-none menu">Sustainable Market</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">About E-Mutan</p>
            <a href="#" class="nav-link text-decoration-none menu">FAQ</a>
            <a href="#" class="nav-link text-decoration-none">Blogs</a>
            <a href="#" class="nav-link text-decoration-none">About Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /* ===== #FOODNOTE ===== */ -->
  <div class="text-center p-3 foodnote" style="background-color: black; color: white">
    Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
    <img src="{{ asset('../assets/img/izin-ojk.png') }}" alt="ojk" class="img-fluid" width="45">
  </div>
</footer>
@endsection
