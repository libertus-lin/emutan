@extends('layouts.app')

@section('title')
Detail history pembelian
@endsection

@section('content')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Detail Pembelian</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-8">

        <div>
          <h5 style="color: #1A5653">Detail Transaksi</h5>
          <div class="card">
            <div class="card-body pt-4">
              <div class="row d-flex justify-content-between mb-1">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">Status</label>
                </div>
                <div class="col-md-6">
                  <label class="badge" style="color: #1A5653; background: #ddd"> Proses Pengiriman </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between mb-1">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">Order ID</label>
                </div>
                <div class="col-md-6 label">
                  <label class="text-black"> IDASLsfnsjs239823 </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between mb-1">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">Order Date</label>
                </div>
                <div class="col-md-6 label">
                  <label class="text-black"> 24 Januari 2024 </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h5 style="color: #1A5653">Detail Transaksi</h5>
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <div class="col-md-6 label">
                <label style="color: #1A5653">Metode Pembayaran</label>
              </div>
              <div class="col-md-6 label">
                <label style="color: #1A5653"> BCA VIRTUAL ACCOUNT</label>
              </div>
            </div>
            <div class="card-body pt-4">
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 label">
                  <label>Pupuk ABC</label>
                </div>
                <div class="col-md-6 label">
                  <label> Rp. 300.000 </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 label">
                  <label>Pupuk ABC</label>
                </div>
                <div class="col-md-6 label">
                  <label> Rp. 300.000 </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 label">
                  <label>Pupuk ABC</label>
                </div>
                <div class="col-md-6 label">
                  <label> Rp. 300.000 </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 label">
                  <label>Pupuk ABC</label>
                </div>
                <div class="col-md-6 label">
                  <label> Rp. 300.000 </label>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-between">
                <div class="col-md-6 label">
                  <label>Pupuk ABC</label>
                </div>
                <div class="col-md-6 label">
                  <label> Rp. 1.200.000 </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h5 style="color: #1A5653">Detail Pengiriman</h5>
          <div class="card">
            <div class="card-body pt-4">
              <div class="row d-flex justify-content-between mb-1">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">Delivery Type</label>
                </div>
                <div class="col-md-6">
                  <label class="text-black"> J&T Cargo </label>
                </div>
              </div>
              <div class="row d-flex justify-content-between mb-1">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">No. Resi</label>
                </div>
                <div class="col-md-6 label">
                  <label class="text-black"> 0194002300039822 </label>
                </div>
              </div>
              <hr>
              <div class="row mb-1 d-flex flex-column">
                <div class="col-md-6 label">
                  <label style="color: #8c8a8a">Order Date</label>
                </div>
              </div>
              <div class="row mb-1 d-flex flex-column">
                <label style="color: #8c8a8a">
                  Ferdian Estu Anantama
                  Jl. Raya Leuwinanggung, Leuwinanggung, The Address Cibubur Town House , Tapos, Depok, Jawa Barat, <br> Tapos, Kota Depok, JAWA BARAT
                  <br> 16456
                  <br>+6282137867189
                </label>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-4">

        <div class="card">
          <div class="card-body pt-4">
            <div class="card-title">
              Panduan Pembayaran
            </div>
            <div class="panduan-detail">
              <ul>
                <li>User melakukan pembayaran sesuai detail transaksi di samping ini.</li>
                <li>Pilih Metode Pembayaran yang akan digunakan, maka no rekening/e-wallet akan muncul ketika dipilih.</li>
                <li>Sertakan nama/email/no hp sebagai keterangan atau referensi ketika melakukan transfer.</li>
                <li>Simpan bukti transfer untuk nantinya digunakan pada saat upload bukti transfer.</li>
                <li>Selanjutnya klik button " Upload Bukti Transfer” di bawah ini.</li>
                <li>Silakan Upload bukti transfer dengan format (PNG/JPG) pada form.</li>
                <li>Admin akan melakukan proses verifikasi maksimal 1 x 12 jam.</li>
                <li>Jika pembayaran selesai, maka status di menu transaksi akan berubah.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body pt-4">
            <div class="card-title">
              Pembayaran Sedang diproses
            </div>
            <div class="row">
              <div class="col-md-1">
                <i class='bx bx-question-mark bx-sm text-white rounded-circle text-bg-warning'></i>
              </div>
              <div class="col">
                <p>Pesanan telah diproses, apabila apa kendala pada pesanan anda bisa konfirmasi pada admin kami!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <a href="https://wa.link/kx79hl" class="btn btn-success btn-sm me-3 px-3 rounded" style="background: #1A5653; border-color: #1A5653; display: block; width: 50%">Chat Admin</a>
          <a href="{{ asset('purchases') }}" class="btn btn-danger btn-sm" style="display: block; width: 50%">Kembali ke Dashboard</a>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
