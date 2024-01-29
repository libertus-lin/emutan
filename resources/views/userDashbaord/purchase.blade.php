<<<<<<< HEAD
@extends('layouts.app')
@section('title')
Halaman pembelian
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
        <li class="breadcrumb-item active">Pembelian</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Transaksi</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable table-borderless">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">No. Invoice</th>
                  <th scope="col">Nomimal</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>7 Juli 2023</td>
                  <td>E-1012000001</td>
                  <td>Rp. 20.000</td>
                  <td>
                    <a href="" class="btn btn-success btn-sm text-white">Berhasil</a>
                  </td>
                  <td>
                    <a href="{{ asset('purchaseHistory') }}" class="btn btn-warning btn-sm text-white">Detail</a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
