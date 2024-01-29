@extends('layouts.master')

@section('title')
    Halaman bibit
@endsection

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('../assets/img/pupuk/bibit.png') }}" class="d-block w-100" alt="gambar jumbotron pupuk">
    </div>
  </div>
</div>

{{-- ProdukBibit --}}
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
              Produk </a>
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
                      <img src="{{ asset('assets/img/pupuk/bibit/Alika.webp') }}" width="115"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Alika</h5>
                      <p class="card-text fw-bold">Rp. 55.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Amistar Top.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Amistar Top</h5>
                      <p class="card-text fw-bold">Rp. 71.300</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Bion M.jpg') }}" width="145"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Bion M</h5>
                      <p class="card-text fw-bold">Rp. 100,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Calaris.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Calaris</h5>
                      <p class="card-text fw-bold">Rp. 119,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Curacron.jpg') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Curacron</h5>
                      <p class="card-text fw-bold">Rp. 85.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Elestal Neo.jpg') }}" width="222"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Elestal Neo</h5>
                      <p class="card-text fw-bold">Rp. 105,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Filia 525SE.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Filia 525SE</h5>
                      <p class="card-text fw-bold">Rp. 35,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Gramoxone.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Gramoxone</h5>
                      <p class="card-text fw-bold">Rp. 94,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Minecto Xtra.jpg') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Minecto Xtra</h5>
                      <p class="card-text fw-bold">Rp. 155,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Miravis Duo.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Miravis Duo</h5>
                      <p class="card-text fw-bold">Rp. 188,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 007 NK ANDALAN.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 007 | NK ANDALAN</h5>
                      <p class="card-text fw-bold">Rp. 79,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 212.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 212</h5>
                      <p class="card-text fw-bold">Rp. 107,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 306 NK Garuda.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 306 | NK Garuda</h5>
                      <p class="card-text fw-bold">Rp. 490,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 6172 NK PERKASA.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 6172 | NK PERKASA</h5>
                      <p class="card-text fw-bold">Rp. 140,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 6501 NK SUPER.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 6501 | NK SUPER</h5>
                      <p class="card-text fw-bold">Rp. 111,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 7202 NK JUARA.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 7202 | NK JUARA</h5>
                      <p class="card-text fw-bold">Rp. 112,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 7207 NK Naga.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 7207 | NK Naga</h5>
                      <p class="card-text fw-bold">Rp. 102,900</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 7328 NK SUMO.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 7328 | NK SUMO</h5>
                      <p class="card-text fw-bold">Rp. 450,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/NK 8103 NK FANTASTIS.webp') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">NK 8103 | NK FANTASTIS</h5>
                      <p class="card-text fw-bold">Rp. 125,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Orondis Opti.webp') }}" width="95"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Orondis Opti</h5>
                      <p class="card-text fw-bold">Rp. 189,250</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Plenum.jpg') }}" width="175"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Plenum</h5>
                      <p class="card-text fw-bold">Rp. 196,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Quilt 200SE.jpg') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Quilt 200SE</h5>
                      <p class="card-text fw-bold">Rp. 177,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Ridomil Gold.jpg') }}" width="150"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Ridomil Gold</h5>
                      <p class="card-text fw-bold">Rp. 97,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Scrore.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Score</h5>
                      <p class="card-text fw-bold">Rp. 72,500</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Topshot 60 OD.webp') }}" width="120"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Topshot 60 OD</h5>
                      <p class="card-text fw-bold">Rp. 191,300</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Touchdown Neo 480 SL.webp') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Touchdown Neo 480 SL</h5>
                      <p class="card-text fw-bold">Rp. 119,450</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Vestoria 20 WG.webp') }}" width="170"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Vestoria 20 WG</h5>
                      <p class="card-text fw-bold">Rp. 125,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/bibit/Virtako 300 SC.webp') }}" width="120"
                        style="display: block; margin: auto">
                      <h5 class="card-title my-2">Virtako 300 SC</h5>
                      <p class="card-text fw-bold">Rp. 145,000</p>
                    </div>
                  </div>
                </div>
              </div>

              <div id="cabe" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/obat/obat-obatan1.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Herbisida</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
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

              <div id="padi" class="tab-pane fade">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/obat/obat-obatan1.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Herbisida</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
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
                      <img src="{{ asset('../assets/img/pupuk/obat/obat-obatan1.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Herbisida</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
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
                      <img src="{{ asset('../assets/img/pupuk/obat/obat-obatan1.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Herbisida</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
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
                      <img src="{{ asset('../assets/img/pupuk/obat/obat-obatan1.png') }}" width="100"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Herbisida</h5>
                      <p class="card-text fw-bold">Rp. 30,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="106"
                        style="display: block; margin: auto">
                      <h5 class="card-title">NPK Phonska Plus Fertilizer</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk2.png') }}" width="112"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pupuk Zk Petro</h5>
                      <p class="card-text fw-bold">Rp. 1.120,000</p>
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

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End ProdukBibit --}}

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

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- End Script -->
@endsection
