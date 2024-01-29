@extends('layouts.master')

@section('title')
  Halaman pupuk
@endsection

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('../assets/img/pupuk/img1.png') }}" class="d-block w-100" alt="gambar jumbotron pupuk">
    </div>
  </div>
</div>

{{-- Produk --}}
<div class="container">
  <div class="row produk-header-top">
    <div class="col-12 py-5 d-flex">
      <h4 class="text-black row-produk-top">Filter by</h4>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-12">
      <div class="bg-white rounded p-2">
        <ul class="nav nav-tabs bg-light bg-header-produk justify-content-center" style="border: none;">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#semua" style="border: none;">Semua
              Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#cabe" style="border: none;">Cabe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#padi" style="border: none;">Padi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#kelapasawit" style="border: none;">Kelapa
              Sawit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#kedelai" style="border: none;">Kedelai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#jagung" style="border: none;">Jagung</a>
          </li>
        </ul>

        <div class="row">
          <div class="col-12">
            <div class="tab-content">

              <div id="semua" class="tab-pane fade in active show">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Nitrea</h5>
                      <p class="card-text fw-bold">Rp. 45,300</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Phonska</h5>
                      <p class="card-text fw-bold">Rp. 450,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">ZK Petro</h5>
                      <p class="card-text fw-bold">Rp. 710,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA-PLUS-50kg.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">3D ZA PLUS</h5>
                      <p class="card-text fw-bold">Rp. 140,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA.png') }}" width="60%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">3D ZA</h5>
                      <p class="card-text fw-bold">Rp. 85,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Biofertille-new-transparant.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Biofertille</h5>
                      <p class="card-text fw-bold">Rp. 94,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Gladiator-transparant.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Gladiator</h5>
                      <p class="card-text fw-bold">Rp. 65,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Kaptan2023.png') }}" width="58%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Kebomas</h5>
                      <p class="card-text fw-bold">Rp. 75,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_npk-kebomas.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NPK Kebomas</h5>
                      <p class="card-text fw-bold">Rp. 50,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Petro-Cas-_2023.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Cas</h5>
                      <p class="card-text fw-bold">Rp. 38,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_petro-ningrat.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Nigrat</h5>
                      <p class="card-text fw-bold">Rp. 24,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_petroponic.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Ponic</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phonska-151012_2021.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Phonska</h5>
                      <p class="card-text fw-bold">Rp. 503,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phonska-Alam_22.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Phonska Alam</h5>
                      <p class="card-text fw-bold">Rp. 175,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_phonska-plus.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Phonska Plus</h5>
                      <p class="card-text fw-bold">Rp. 701,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phosgreen_50_22.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Phosgreen</h5>
                      <p class="card-text fw-bold">Rp. 230,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_SP-26.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">SP</h5>
                      <p class="card-text fw-bold">Rp. 185,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_subnonsub_urea.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Subnonsub urea</h5>
                      <p class="card-text fw-bold">Rp. 85,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_zk_191126_040038.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">ZK</h5>
                      <p class="card-text fw-bold">Rp. 185,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/bahan-kimia.jpg') }}" width="93%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Bahan Kimia</h5>
                      <p class="card-text fw-bold">Rp. 72,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Biofeed-transparant.png') }}" width="30%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Biofeed</h5>
                      <p class="card-text fw-bold">Rp. 60,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/petroChICK-transparant.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petro Chick</h5>
                      <p class="card-text fw-bold">Rp. 35,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PetroFish-transparant.png') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Petrofish</h5>
                      <p class="card-text fw-bold">Rp. 72,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Nutremag.jpg') }}" width="70%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Nutremag</h5>
                      <p class="card-text fw-bold">Rp. 45,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Pupuk Dolomit.jpg') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Pupuk Dolomit</h5>
                      <p class="card-text fw-bold">Rp. 100,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Pusrihydro.jpg') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Pusrihydro</h5>
                      <p class="card-text fw-bold">Rp. 85,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Bioripah.jpg') }}" width="50%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Bioripah</h5>
                      <p class="card-text fw-bold">Rp. 115,500</p>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pupuk nitrea.png') }}" width="64%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Pupuk Nitrea</h5>
                      <p class="card-text fw-bold">Rp. 46,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pupuk hayati bion-up.png') }}" width="64%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Hayati Bion-Up</h5>
                      <p class="card-text fw-bold">Rp. 56,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pupuk sp 36.jpg') }}" width="64%"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Pupuk SP-36</h5>
                      <p class="card-text fw-bold">Rp. 120,000</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="cabe" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                      <p class="card-text fw-bold">Rp. 1.000,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class=""card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/alsintan/alsintan1.png') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Petro Hi-Corn</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="padi" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                      <p class="card-text fw-bold">Rp. 1.000,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/alsintan/alsintan1.png') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Petro Hi-Corn</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="kelapasawit" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                      <p class="card-text fw-bold">Rp. 1.000,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/alsintan/alsintan1.png') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Petro Hi-Corn</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="kedelai" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                      <p class="card-text fw-bold">Rp. 1.000,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/alsintan/alsintan1.png') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Petro Hi-Corn</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="jagung" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Urea 50 Kg</h5>
                      <p class="card-text fw-bold">Rp. 1.000,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA-PLUS-50kg.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">3D ZA PLUS 50kg</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/3D-ZA.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">3D ZA</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Biofertille-new-transparant.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Biofertille new transparant</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/Gladiator-transparant.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Biofertille new transparant</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Kaptan2023.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Kaptan</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_npk-kebomas.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG npk kebomas</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Petro-Cas-_2023.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro Cas</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_petro-ningrat.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro nigrat</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_petroponic.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro petroponic</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phonska-151012_2021.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro phonska</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phonska-Alam_22.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro phonska alam</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_phonska-plus.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro phonska plus</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_Phosgreen_50_22.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG Petro Phosgreen</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/PG_SP-26.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG SP</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_subnonsub_urea.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PG subnonsub urea</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/pupuk/pg_zk_191126_040038.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk ZK</h5>
                      <p class="card-text fw-bold">Rp. 80.720,999</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Produk --}}

{{-- Permission --}}
<div class="permission-section bg-light">
  <div class="container text-black">
    <div class="row text-center mb-5">
      <div class="col-sm-12 col-lg-6 col-md-6">
        <h5>Telah Berizin dan Diawasi oleh</h5>
      </div>
      <div class="col-sm-12 col-lg-6 col-md-6">
        <h5>Anggota Terdaftar dari</h5>
      </div>
    </div>
    <div class="row" id="izin-bank">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="{{ asset('../assets/img/izin-ojk.png') }}" class="img-fluid" alt="ojk">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="{{ asset('../assets/img/izin-fintech.png') }}" class="img-fluid" alt="fintech">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="{{ asset('../assets/img/izin-afpi.png') }}" class="img-fluid" alt="afpi">
      </div>
    </div>
  </div>
</div>
{{-- End Permission --}}

{{-- Footer --}}
<footer>
  <!-- /* ===== #ABOUTUS ===== */ -->
  <div class="disclamer-section">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-sm-12 col-md-2" id="logo-footer">
          <img class="img-fluid" src="{{ asset('../assets/img/emutanlg.png') }}" alt="logo">
        </div>
        <div class="col-sm-12 col-md-3 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Kontak Kami</p>
            <span>PT. Emutan</span>
            <span>Jl. Lewinanggung RT.11/RW.03, Depok, Jawa Barat.</span>
            <a href="#" class="text-decoration-none text-dark">pt.emutan@asia</a> <br>
            <a href="#" class="text-decoration-none text-dark">021-341-560</a> <br><br>
            <div class="media-sosial mb-3">
              <a href="#" class="text-decoration-none text-black">Find join us</a> <br>
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
            <p class="fw-bold">Produk Pertanian</p>
            <a href="#" class="nav-link text-decoration-none">Pupuk</a>
            <a href="#" class="nav-link text-decoration-none">Bibit</a>
            <a href="#" class="nav-link text-decoration-none">Obat-Obatan</a>
            <a href="#" class="nav-link text-decoration-none">Alsintan</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Kategori</p>
            <a href="#" class="nav-link text-decoration-none">Manajemen Sistem</a>
            <a href="#" class="nav-link text-decoration-none menu">Sustainable Market</a>
            <a href="#" class="nav-link text-decoration-none menu">Skoring</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-2 text-start">
          <div class="footer-menus m-3">
            <p class="fw-bold">Tentang E-Mutan</p>
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
{{-- End Footer --}}

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
@endsection
