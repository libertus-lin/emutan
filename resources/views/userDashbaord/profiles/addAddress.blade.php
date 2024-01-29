@extends('layouts.template')

@section('title')
Halaman tambah alamat
@endsection

@section('content')
<div class="col-lg-8 col-md-12 col-12 personal-data">
  <div class="col-12">
    <div class="row">
      <div class="col-4 left-menu">
        <ul>
          <li class="mb-2">
            <a href="" class="text-black text-decoration-none">
              <i class="bi bi-person"></i>
              Akun Saya
            </a>
          </li>
          <li class="mb-2">
            <a href="" class="text-black text-decoration-none">
              <i class="bi bi-person-vcard"></i>
              Data Pribadi
            </a>
          </li>
          <li class="mb-2">
            <a href="" class="text-black text-decoration-none">
              <i class="bi bi-file-earmark-lock2"></i>
              Ubah Kata Sandi
            </a>
          </li>
          <li class="mb-2">
            <a href="#" class="text-black text-decoration-none">
              <i class="bi bi-file-earmark-medical"></i>
              Syarat & Ketentuan
            </a>
          </li>
          <li class="mb-2">
            <a href="#" class="text-black text-decoration-none">
              <i class="bi bi-file-earmark-ruled"></i>
              Sosialisasi
            </a>
          </li>
        </ul>
      </div>

      <div class="col-8">
        <div class="bg-white p-2" id="akunsaya">
          <ul class="nav nav-tabs justify-content-center d-flex">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#saldodana">
                Data Personal
              </a>
            </li>
            <li class="nav-item me-auto">
              <a class="nav-link active" data-bs-toggle="tab" href="#riwayat">
                Alamat
              </a>
            </li>
          </ul>

          <div class="row">
            <div class="col-12">
              <div class="tab-content">

                <div id="saldodana" class="tab-pane fade">
                  <div class="card mt-3">
                    <div class="row m-2">
                      <div class="gambar-user text-center">
                        <img src="{{ asset('assets/img/icons//img5.png') }}" alt="" class="img-fluid small-img d-block m-auto">
                        <a href="" class="text-black text-decoration-none border-1 rounded">Pilih
                          gambar</a>
                      </div>
                      <div class="content-user mt-5">
                        <form class="row g-3">
                          <div class="col-md-6">
                            <p class="m-0" style="color: grey;">Nama
                              Lengkap</p>
                            <p><b>Michael Ternando</b> <a href="" class="text-success ms-2">ubah</a></p>
                          </div>
                          <div class="col-6">
                            <p class="m-0" style="color: grey;">Jenis
                              Kelamin</p>
                            <p><b>Laki-Laki</b> <a href="" class="text-success ms-2">ubah</a></p>
                          </div>
                          <div class="col-md-6">
                            <p class="m-0" style="color: grey;">Tanggal
                              Lahir</p>
                            <p><b>12 Desember 1980</b> <a href="" class="text-success ms-2">ubah</a></p>
                          </div>
                          <div class="col-6">
                            <p class="m-0" style="color: grey;">Nomor
                              Telepon</p>
                            <p><b>0891223788902</b> <a href="" class="text-success ms-2">ubah</a></p>
                          </div>
                          <div class="col-md-6">
                            <p class="m-0" style="color: grey;">Tanggal
                              Lahir</p>
                            <p><b>12 Desember 1980</b> <a href="" class="text-success ms-2">ubah</a></p>
                          </div>
                          <div class="col-6">
                            <img src="{{ asset('assets/img/icons/img6.png') }}" alt=""
                              class="img-fluid small-img d-block m-auto mt-3">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="riwayat" class="tab-pane fade in active show">
                  <div class="card alamat-user d-flex justify-content-between mt-3">
                    <div class="group-alamat m-3 d-flex justify-content-between">
                      <label>Alamat saya</label>
                      <a href="{{ url('address') }}" class="float-end alamat-baru rounded text-decoration-none">+
                        Alamat Baru</a>
                    </div>

                    <div class="p-3">
                      <h3 class="mb-3">Alamat Baru</h3>
                      <form class="row">
                        <div class="col-md-6 mb-3">
                          <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" autofocus>
                        </div>
                        <div class="col-md-6 mb-3">
                          <input type="number" class="form-control" id="nomorTelp" placeholder="Nomor Telepon">
                        </div>

                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control" id="inputProvinsi" placeholder="Provinsi">
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="text" class="form-control" id="inputKabKota" placeholder="Kabupaten/Kota">
                        </div>
                        <div class="col-md-12 mb-3">
                          <input type="number" class="form-control" id="inputKodePos" placeholder="Kode Pos">
                        </div>
                        <div class="col-md-12 mb-3">
                          <textarea class="form-control" name="" id="inputDetail" rows="3"
                            placeholder="Detail Lainnya"></textarea>
                        </div>
                        <div class="col-12 mt-5">
                          <a onclick="alert('Berhasil disubmit')" href="#" class="float-end btn btn-primary"
                            style="border: none;">Simpan</a>
                          <a href="#" class="float-end me-2 btn btn-primary"
                            style=" background-color: grey;border: none">Nanti
                            aja</a>
                        </div>
                      </form>
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
@endsection
