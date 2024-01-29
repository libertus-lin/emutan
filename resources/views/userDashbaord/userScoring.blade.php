<<<<<<< HEAD
@extends('layouts.app')
@section('title')
Halaman skoring petani
@endsection

@section('content')
<<<<<<< HEAD

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Proyek</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item active">Skoring</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body pt-3">

            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                  Masukkan Data
                </button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                  Cek Hasil
                </button>
              </li>
            </ul>

            <div class="tab-content pt-3">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <div class="row mt-3">
                  <div class="col text-center">
                    <h5 class="fw-bold text-black">Masukkan Identitas</h5>
                  </div>
                </div>
                <div class="row pt-4">
                  <div class="col-lg-8 col-md-6 label mb-2 m-auto rounded-3 p-3" style="border: 1px solid rgb(201, 200, 200); background: #f9f9f9;">
                    <form action="" method="post">
                      <div class="form-group mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" style="background: #f9f9f9;">
                      </div>
                      <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" style="background: #f9f9f9;">
                      </div>
                      <div class="form-group row g-2 mb-3">
                        <label for="jenis_kelamin" class="form-label">Nama Lengkap</label>
                        <div class="col-md-6">
                          <input type="checkbox" id="pria" class="form-check-input">
                          <label for="pria">Pria</label>
                        </div>
                        <div class="col-md-6">
                          <input type="checkbox" id="wanita" class="form-check-input">
                          <label for="wanita">Wanita</label>
                        </div>
                      </div>
                      <div class="form-group row g-3 mb-3">
                        <div class="col-md-4">
                          <label for="tanggal_lahir" class="form-label">Tanggal</label>
                          <input type="number" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="DD">
                        </div>
                        <div class="col-md-4">
                          <label for="bulan_lahir" class="form-label">Bulan</label>
                          <input type="number" class="form-control" id="bulan_lahir" name="bulan_lahir" placeholder="MM">
                        </div>
                        <div class="col-md-4">
                          <label for="tahun_lahir" class="form-label">Tahun</label>
                          <input type="number" class="form-control" id="tahun_lahir" name="tahun_lahir" placeholder="YYYY">
                        </div>
                        <div class="form-group text-end">
                          <button type="submit" class="text-white py-2 px-5 rounded-5 border-0" style="background: #107869;">Cek Skor</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit" id="profile-edit">

                <div class="row rounded-3 pt-4" style="border: 1px solid rgb(201, 200, 200);">
                  <div class="col-lg-3 col-md-6 label mb-2 m-auto my-5 py-5">
                    <div class="card-body">
                      <span class="text-dark">Hasil skoring anda masih kosong</span>
                    </div>
                  </div>
                </div>

              </div>
              <!-- End Profile Edit Form -->
            </div>
          </div><!-- End Bordered Tabs -->
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
