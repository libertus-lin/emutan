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

        <div class="card">
          <div class="card-body pt-4">
            <div class="card-title">
              Detail Transaksi
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-md-6 label">
                <label>Pupuk Jagung</label>
              </div>
              <div class="col-md-6 label">
                <label class="text-black fw-bold"> Rp. 25.000 </label>
              </div>
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-md-6 label">
                <label>Obat Cair Cabe</label>
              </div>
              <div class="col-md-6 label">
                <label class="text-black fw-bold"> Rp. 30.000 </label>
              </div>
            </div>
            <div class="row d-flex justify-content-between">
              <div class="col-md-6 label">
                <label>Pupuk Cabe</label>
              </div>
              <div class="col-md-6 label">
                <label class="text-black fw-bold"> Rp. 25.000 </label>
              </div>
            </div>
            <hr>
            <div class="row d-flex justify-content-between">
              <div class="col-md-6 label">
                <label>Subtotal</label>
              </div>
              <div class="col-md-6 label">
                <label class="text-black fw-bold"> Rp. 80.000 </label>
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
              Pembayaran Berhasil
            </div>
            <div class="row">
              <div class="col-md-1">
                <i class='bx bx-check text-bg-primary'></i>
              </div>
              <div class="col">
                <p>Kamu sudah bisa mengakses kelasnya ya. Jangan lupa masuk ke grup melalui dashboard atau link disini ya.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <a href="#" class="btn btn-success btn-sm me-3">Belanja Lagi</a>
          <a href="{{ asset('purchases') }}" class="btn btn-danger btn-sm">Kembali ke Dashboard</a>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
