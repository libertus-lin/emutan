@extends('layouts.master')

@section('title')
  Halaman alsintan
@endsection

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="{{ asset('../assets/img/pupuk/pupuk-alsintan.png') }}" class="d-block w-100" alt="gambar jumbotron pupuk">
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
                      <img src="{{ asset('assets/img/pupuk/alsintan/ABD 3200M (AHF).jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">ABD 3200M (AHF)</h5>
                      <p class="card-text fw-bold">Rp. 70,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/alsintan1.png') }}" width="78%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pembajak Sawah</h5>
                      <p class="card-text fw-bold">Rp. 100,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/ABD 3200M.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">ABD 3200M</h5>
                      <p class="card-text fw-bold">Rp. 85,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/ADL Series.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">ADL Series</h5>
                      <p class="card-text fw-bold">Rp. 50,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/APC-3.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">APC-3</h5>
                      <p class="card-text fw-bold">Rp. 45,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/alsintan2.png') }}" width="78%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Pembersih Benih</h5>
                      <p class="card-text fw-bold">Rp. 67,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/ARS-3000.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">ARS-3000</h5>
                      <p class="card-text fw-bold">Rp. 80,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/ASC Series.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">ASC Series</h5>
                      <p class="card-text fw-bold">Rp. 56,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/alsintan3.png') }}" width="75%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Tractor</h5>
                      <p class="card-text fw-bold">Rp. 56,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/avs.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">AVS Series</h5>
                      <p class="card-text fw-bold">Rp. 50,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/CYCLONIC HUSK FURNACE.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">CYCLONIC HUSK FURNACE</h5>
                      <p class="card-text fw-bold">Rp. 50,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/FLUIDIZED.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">FLUIDIZED</h5>
                      <p class="card-text fw-bold">Rp. 100,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/alsintan4.png') }}" width="130%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Drone</h5>
                      <p class="card-text fw-bold">Rp. 85,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/HU10MPC.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">HU10MPC</h5>
                      <p class="card-text fw-bold">Rp. 100,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/INDIRECT (AHF 100i).jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">INDIRECT (AHF 100i)</h5>
                      <p class="card-text fw-bold">Rp. 100,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/KB40G.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">KB40G</h5>
                      <p class="card-text fw-bold">Rp. 45,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/pc-series.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">PC Series</h5>
                      <p class="card-text fw-bold">Rp. 55,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/RPS10A.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">RPS10A</h5>
                      <p class="card-text fw-bold">Rp. 55,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/Seed Cleaner A2H.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">Seed Cleaner A2H</h5>
                      <p class="card-text fw-bold">Rp. 56,000.000</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 col-6 my-4">
                    <div class="card card-body-produk p-2">
                      <img src="{{ asset('assets/img/pupuk/alsintan/VRD Series.jpg') }}" width="100%"
                        style="display: block; margin: auto">
                      <h5 class="card-title">VRD Series</h5>
                      <p class="card-text fw-bold">Rp. 45,000.000</p>
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
