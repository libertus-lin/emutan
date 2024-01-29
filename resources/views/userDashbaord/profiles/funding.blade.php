@extends('layouts.app')
@section('title')
Halaman form pendanaan
@endsection

@section('content')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body pt-4">
            <div class="social-links mt-2">
              <a href="" class="d-block text-black text-decoration-none w-100 p-2 rounded-2 mb-2"
                style="border: 1px solid rgb(243, 242, 242);">
                <i class='bx bx-user'></i>
                Akun saya
              </a>
              <a href="" class="d-block text-black text-decoration-none w-100 p-2 rounded-2 mb-2"
                style="border: 1px solid rgb(243, 242, 242);">
                <i class='bx bx-user-check'></i>
                Data pribadi
              </a>
              <a href="" class="d-block text-black text-decoration-none w-100 p-2 rounded-2 mb-2"
                style="border: 1px solid rgb(243, 242, 242);">
                <i class='bx bx-lock-alt'></i>
                Ubah kata sandi
              </a>
              <a href="" class="d-block text-black text-decoration-none w-100 p-2 rounded-2 mb-2"
                style="border: 1px solid rgb(243, 242, 242);">
                <i class='bx bx-cog'></i>
                Syarat & Ketentuan
              </a>
              <a href="" class="d-block text-black text-decoration-none w-100 p-2 rounded-2"
                style="border: 1px solid rgb(243, 242, 242);">
                <i class='bx bx-detail'></i>
                Sosialisasi
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data
                  Personal</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Alamat</button>
              </li>
            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <div class="row py-3 px-3">
                  <div class="col-md-8 col-lg-9 m-auto">
                    <div class="card-body text-center">
                      <h4>Lengkapi Identitas Anda</h4>
                      <p>Sesuai dengan Ketentuan & Peraturan OJK, kami membutuhkan identitas anda.</p>
                    </div>
                    <form action="" method="post">
                      <div class="form-group mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                      </div>
                      <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama Sesuai KTP</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                      </div>
                      <div class="form-group mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
                      </div>
                      <div class="form-group mb-3">
                        <label for="foto_ktp" class="form-label">Upload Foto KTP</label>
                        <input type="file" class="form-control" id="foto_ktp" name="foto_ktp">
                      </div>
                      <div class="form-group mb-3">
                        <label for="foto_selfir" class="form-label">Upload Foto Selfie</label>
                        <input type="file" class="form-control" id="foto_selfir" name="foto_selfir">
                      </div>
                    </form>
                  </div>
                </div>

                <div class="row">
                  <div class="text-center">
                    <a href="{{ url('bankAccount') }}" class="text-white px-4 py-2 rounded-2" style="background: #1A5653;">Continue</a>
                  </div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <div class="row">
                  <div class="d-flex justify-content-between">
                    <div class="col-lg-6 col-md-6 label mb-2">
                      <label>Alamat Saya</label> <br />
                    </div>
                    <div class="col-lg-6 col-md-4 label">
                      <a href="" class="text-white px-4 py-2 rounded-2" style="background: #1A5653;"
                        data-bs-toggle="modal" data-bs-target="#verticalycentered">+ Alamat Baru</a>
                    </div>
                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Alamat Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <!-- Browser Default Validation -->
                            <form class="row g-3">
                              <div class="col-md-6">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                              </div>
                              <div class="col-md-6">
                                <input type="number" class="form-control" id="nomor_telepon"
                                  placeholder="Nomor Telepon">
                              </div>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="provinsi" placeholder="Provinsi">
                              </div>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="kabupaten_kota"
                                  placeholder="Kabupaten/Kota">
                              </div>
                              <div class="col-md-12">
                                <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
                              </div>
                              <div class="col-12">
                                <input type="number" class="form-control" id="kode_pos" placeholder="Kode Pos">
                              </div>
                              <div class="col-12">
                                <textarea class="form-control" id="detail_lainnya" placeholder="Detail Lainnya"
                                  rows="3"></textarea>
                              </div>
                            </form>
                            <!-- End Browser Default Validation -->
                          </div>
                          <div class="modal-footer">
                            <a href="#" class="px-4 py-2 rounded-2"
                              style="background: rgb(241, 240, 240); color: #1A5653;">Nanti Saja</a>
                            <a href="" class="px-4 py-2 rounded-2 text-white" style="background: #1A5653;">Simpan</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
