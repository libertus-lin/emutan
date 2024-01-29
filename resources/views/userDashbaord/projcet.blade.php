<<<<<<< HEAD
@extends('layouts.app')

@section('title')
    Pendanaan
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Proyek</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active">Proyek</li>
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
                                        Pendanaan Aktif <a href="#" class="px-3 rounded-1 text-black"
                                            style="background: rgb(228, 228, 228);">1 Proyek</a>
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                                        Pendanaan Selesai <a href="#" class="px-3 rounded-1 text-black"
                                            style="background: rgb(228, 228, 228);">0 Proyek</a>
                                    </button>
                                </li>

                                <li class="nav-item ms-auto">
                                    <button class="nav-link">
                                        <a href="#" class="px-3 rounded-1 text-black"
                                            style="background: rgb(228, 228, 228); border: 1px solid rgb(175, 175, 175);">+
                                            Ajukan pendanaan</a>
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <div class="row rounded-3 pt-4" style="border: 1px solid rgb(201, 200, 200);">
                                        <div class="col-lg-3 col-md-6 label mb-2">
                                            <div class="">
                                                <div class="card-body d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('assets/img/produk/img1.png') }}"
                                                            class="img-fluid w-50 rounded-1">
                                                    </div>
                                                    <div>
                                                        <h6 class="text-black fw-bold">Komoditas Jagung</h6>
                                                    </div>
                                                </div>
                                                <div class="card-body d-flex justify-content-between text-start">
                                                    <div>
                                                        <span>Nomimal Penagajuan</span> <br>
                                                        <span class="text-black fw-bold">Rp. 20.000.000</span>
                                                    </div>
                                                    <span style="width: 2px; background: #1a5653;"></span>
                                                    <div>
                                                        <span>Periode Margin</span> <br>
                                                        <span class="text-black fw-bold">5 Bulan</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit" id="profile-edit">
                                    <div class="py-5 rounded-3 d-flex justify-content-center text-center flex-column">
                                        <div>
                                            <img src="{{ asset('assets/img/icons/img2.png') }}" alt="Profile">
                                        </div>
                                        <span class="fw-bold">Belum ada pendanaan yang selesai.</span>
                                        <p>Anda belum memiliki riwayat pendanaan yang selesai.</p>
                                    </div>

                                </div>
                                <!-- End Profile Edit Form -->
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
