
@extends('layouts.app')

@section('title')
    Halaman dashboard petani
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
                                        <i class='bx bx-credit-card'></i>
                                        Dana Saya
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        <i class='bx bx-detail'></i>
                                        Riwayat Transaksi
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <div class="row p-5 rounded-3"
                                        style="background: linear-gradient(270deg, #45A3C0 61.8%, #69F2D9 80.51%);">
                                        <div class="col-lg-4 col-md-6 label mb-2">
                                            <label>Saldo Pengembalian <i class='bx bx-refresh'></i></label> <br />
                                            <label class="text-black fw-bold">
                                                Rp. <a class="h2 fw-bold">0</a>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 label mb-2">
                                            <label>Saldo Pengembalian <i class='bx bx-refresh'></i></label> <br />
                                            <label class="text-black fw-bold">
                                                Rp. <a class="h2 fw-bold">0</a>
                                            </label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center">
                                            <a href="#" class="bg-light px-4 py-2 rounded-3">+ Top Up</a>
                                        </div>
                                    </div>

                                    <!-- Left side columns -->
                                    <div class="col-lg-12">
                                        <div class="row">

                                            <!-- Pengambilan Terdekat -->
                                            <div class="col-xxl-6 col-md-6">
                                                <h5 class="card-title">Pengambilan Terdekat</h5>
                                                <div class="px-3 rounded-3 d-flex justify-content-between align-content-center"
                                                    style="border: 1px solid rgb(202, 202, 202); background: rgb(237, 235, 235);">
                                                    <h5 class="card-title">Total Tagihan</h5>
                                                    <h5 class="card-title">Rp. <b>0</b></h5>
                                                </div>

                                                <div
                                                    class="py-5 rounded-3 d-flex justify-content-center text-center flex-column">
                                                    <div>
                                                        <img src="{{ asset('assets/img/icons/img1.png') }}" alt="Profile">
                                                    </div>
                                                    <span class="fw-bold">Belum ada jadwal tagihan pengembalian</span>
                                                    <p>Anda belum memiliki pengembalian pendanaan terdekat.</p>
                                                </div>
                                            </div>
                                            <!-- End Pengambilan Terdekat -->

                                            <!-- Buat Laporan -->
                                            <div class="col-xxl-6 col-md-6">
                                                <h5 class="card-title">Buat Laporan</h5>

                                                <div class="p-5 rounded-3 d-flex justify-content-between text-center flex-column"
                                                    style="border: 1px solid rgb(202, 202, 202); background: rgb(237, 235, 235);">
                                                    <div>
                                                        <img src="{{ asset('assets/img/icons/img2.png') }}" alt="Profile">
                                                    </div>
                                                    <span class="fw-bold">Belum ada laporan yang harus dibuat</span>
                                                    <p>Anda dapat membuat laporan proyek pendanaan anda disini.</p>
                                                </div>
                                            </div>
                                            <!-- End Buat Laporan -->
                                        </div>
                                    </div>
                                    <!-- End Left side columns -->

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 mb-2">
                                            <label>Riwayat Transaksi</label> <br />
                                        </div>
                                        <div class="col-xl-2 col-md-6 m-0">
                                        </div>
                                        <div class="col-xl-6 d-flex col-md-6">
                                            <form action="" class="me-2">
                                                <select class="form-control w-100">
                                                    <option disabled selected>Semua</option>
                                                    <option disabled>Filter Lainnya</option>
                                                </select>
                                            </form>

                                            <input type="text" name="cari" class="form-control"
                                                placeholder="Cari Transaksi" title="Enter search keyword">
                                            </form>
                                            <!-- End Profile Edit Form -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center my-5 py-5">
                                            <div>
                                                <img src="{{ asset('assets/img/icons/img4.png') }}" alt="Profile">
                                            </div>
                                            <span class="fw-bold">Belum ada riwayat transaksi</span>
                                            <p>Anda belum memiliki riwayat transaksi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
        </section>
    </main><!-- End #main -->

@endsection
