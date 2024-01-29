@extends('layouts.master')

@section('title')
Platform Emutan Mudah Mendapatkan Produk pertanian yang lebih mudah, cepat dan terpercaya!
@endsection

@section('content')

{{-- Header --}}
<div class="main-section-header">
  <div class="container-fluid header d-flex">
    <div class="row my-4 d-flex justify-content-between jumbotron-head">
      <div class="col-xs col-sm-12 col-md-6 col-lg-8 jumbotron-left-section mb-3">
        <div class="jumbotron-top-section">
          <h1 class="jumbotron-header-section fw-bold">Dapatkan Produk pertanian dengan mudah, cepat </h1>
          <h1 class="jumbotron-head-section fw-bold">dan terpercaya</h1>
        </div>
        <div class="jumbotron-center-section">
          <p>
            Mulailah membangun pertanian yang lebih baik serta berkelanjutan dengan Produk yang handal
            lewat e-Mutan.
          </p>
        </div>
        <div class="jumbotron-bottom-section">
          <a href="#mulai" class="btn-get text-decoration-none text-black">Get Started</a>
          <a href="#funding" class="btn-learn text-decoration-none text-black">Pelajari lebih lanjut</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 jumobtron-right-section">
        <img src="{{ asset('assets/img/hero-jumbotron.png') }}" alt="gambar jumbotron" class="img-fluid" width="100%">
      </div>
    </div>
  </div>
</div>

{{-- Funding Project --}}
<div class="section-funding" id="funding">
  <div class="container funding-content">
    <div class="row">
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img1.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">Rp 250 Miliiar</p>
          <p class="fund-desc">Total Outstanding Produk</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img2.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">Rp 500 Miliiar</p>
          <p class="fund-desc">Total Outstanding Produk</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img3.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">Rp 705 Miliiar</p>
          <p class="fund-desc">Total Produk Tersalurkan</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img4.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">Rp 250 Miliiar</p>
          <p class="fund-desc">Total Produk Tahun Berjalan</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img5.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">10 %</p>
          <p class="fund-desc">Total Petani yang Tidak Aktif</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img6.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">85 %</p>
          <p class="fund-desc">Total Penerima Produk Aktif</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img7.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">80 %</p>
          <p class="fund-desc">Total Penerima Produk</p>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-md-6 col-lg-3 d-flex funding-traffic">
        <div class="funding-images">
          <img src="{{ asset('assets/img/funding-projects/img8.png') }}" alt="trafic Produk" class="img-fluid">
        </div>
        <div class="funding-desc">
          <p class="fund-title">90 %</p>
          <p class="fund-desc">Tingkat Keberhasilan 90 (TKB90)</p>
        </div>
      </div>
    </div>
  </div>
  <center>
    <span class="fs-6"><small>Note: <i class="text-warning">Data sementara (Belum up to date)</i></small></span>
  </center>
</div>

{{-- Features --}}
<div class="section-features-card">
  <div class="container-fluid features-container">
    <div class="row mb-3 features-row">
      <div class="col-sm-12 col-md-6 col-lg-6 features-header">
        <p>Fitur Layanan</p>
        <h2 class="mb-2">Fitur Layanan Yang Kami Sediakan</h2>
        <p class="caption">
          Berikut ini adalah fitur layanan yang disediakan oleh emutan, diantaranya dapat dilihat di menu
          berikut:
        </p>
      </div>
    </div>
    <div class="row features-main-row">
      <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
        <div class="features-bx-sm rounded p-3 mb-3">
          <div class="features-image">
            <img src="{{ asset('assets/img/features/img1.png') }}" alt="" class="img-fluid">
          </div>
          <div class="features-description">
            <h5 class="mb-2 mt-3">Produk Pertanian</h5>
            <p class="mb-3">
              Mulai untuk mendapatkan produk pertanian di platform kami, tentunya mudah, cepat dan terpecaya, sekaligus
              berdampak kepada masyarakat dan lingkungan.
            </p>
            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
              Pelajari lebih lanjut
              &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
        <div class="features-bx-sm rounded p-3 mb-3">
          <div class="features-image">
            <img src="{{ asset('assets/img/features/img2.png') }}" alt="" class="img-fluid">
          </div>
          <div class="features-description">
            <h5 class="mb-2 mt-3">Manajemen Sistem</h5>
            <p class="mb-">
              Bagian ini adalah sistem layanan edukasi untuk membimbing dan mengarahkan para petani dalam
              mengelola lahan pertaniannya masing-masing.
            </p>
            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
              Pelajari lebih lanjut
              &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 features-boxs">
        <div class="features-bx-sm rounded p-3 mb-3">
          <div class="features-image">
            <img src="{{ asset('assets/img/features/img3.png') }}" alt="" class="img-fluid">
          </div>
          <div class="features-description">
            <h5 class="mb-3 mt-3">Sustainable Market</h5>
            <p class="mb-4">
              Fitur terakhir adalah layanan pasar, dimana seluruh aktivitas transaksi yang terjadi
              nantinya
              dapat melalui layanan tersebut.
            </p>
            <a href="#" class="link-item text-decoration-none text-dark fw-semibold">
              Pelajari lebih lanjut
              &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /* ===== #MOBILE-FEATURES ===== */ -->
<div class="section-mobile">
  <div class="container-fluid mobile-container">
    <div class="row mb-5">
      <div class="col-sm-12 col-md-6 col-lg-9 mobile-header">
        <h2>Mudah Mendapatkan Produk Pertanian Bersama <b class="span">E-mutan</b></h2>
        <p class="caption">
          Berikut ini adalah fitur layanan yang disediakan oleh emutan yang mampu memberikan dampak terhadap lingkungan dan masyarakat, diantaranya dapat dilihat di menu berikut:
        </p>
      </div>
    </div>
    <div class="row mobile-bottom">
      <div class="col-sm-12 col-md-6 col-lg-4 mobile-left-content">
        <div class="container mbl-description side-left">
          <ul class="description-right">
            <p class="fw-bold">Ini adalah Anda</p>
            <li>
              Tidak memiliki keahloan bertani <i class="bi bi-x-circle text-danger ms-2"></i>
            </li>
            <li>
              Tidak memiliki lahan <i class="bi bi-x-circle text-danger ms-2"></i>
            </li>
            <li>
              Memiliki dana untuk menyalurkan produk pertanian <i class="bi bi-check-circle-fill text-success ms-2"></i>
            </li>
          </ul>
        </div>
        <div class="img-left side-right">
          <img src="{{ asset('assets/img/imgright2.png') }}" alt="petani" class="img-fluid">
          <img src="{{ asset('assets/img/imgright1.png') }}" alt="arrow" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 mobile-center-content mt-3">
        <div class="img-center">
          <img src="assets/img/mobile-version2.png" alt="gambar mobile" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 mobile-right-content mt-2">
        <div class="container mbl-description">
          <ul class="description-left">
            <p class="fw-bold">Ini adalah Petani</p>
            <li>
              <i class="bi bi-check-circle-fill text-success me-2"></i> Memiliki kemampuan bertani
            </li>
            <li>
              <i class="bi bi-check-circle-fill text-success me-2"></i> Memiliki lahan
            </li>
            <li>
              <i class="bi bi-x-circle text-danger me-2"></i> Tidak memiliki keahlian bertani
            </li>
          </ul>
        </div>
        <div class="img-right">
          <img src="{{ asset('assets/img/imgleft1.png') }}" alt="arrow" class="img-fluid">
          <img src="{{ asset('assets/img/imgleft2.png') }}" alt="petani" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Timeline --}}
<div class="section-timeline">
  <div class="row timeline-row-line">
    <ul class="d-flex justify-content-center timeline-main-line nav nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="button-tabs" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab"
          aria-controls="pills-home">
          How E-mutan Help Farmer
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="button-tabs" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab"
          aria-controls="pills-contact">
          How E-mutan to Fund a Project
        </button>
      </li>
    </ul>

    <div class="d-flex justify-content-center tab-content py-5" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="row timeline-step">
          <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
            <img src="{{ asset('assets/img/1.png') }}" alt="choose project image">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 description-one mb-3">
            <p class="heading">Pilih produk pertanian</p>
            <p class="paragraph" style="margin-left: 1.5rem">
              eMutan akan meluncurkan produk pertanian yang dapat ditemukan di halaman masing-masing produk.
            </p>
          </div>
          <div class="col" id="clear">
            <span class="step-numbering step-one">1</span>
          </div>
        </div>

        <div class="row timeline-step">
          <div class="col-6" id="clear">
            <span class="step-numbering step-two">2</span>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-2 margin-img margin-img-disbursed">
            <img src="{{ asset('assets/img/2.png') }}" alt="funding disbursed image">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 description-two mb-3">
            <p class="heading">Dapatkan produk</p>
            <p class="paragraph" style="margin-left: 1.5rem">
              Setelah data pengajuan sudah lengkap dan sudah terkirim, maka para petani akan mendapatkan approval untuk mendapatkan produk pertanian di emutan.
            </p>
          </div>
        </div>

        <div class="row timeline-step">
          <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
            <img src="{{ asset('assets/img/3.png') }}" alt="monitor progress image">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 description-three mb-3">
            <p class="heading">Monitoring Progress</p>
            <p class="paragraph" style="margin-left: 1.5rem">
              Petani wajib menyampaikan laporan perkembangan proyek yang di lalui lewat memberikan/mengunggah foto dan detail hasil perkembangan proyek secara berkala.
            </p>
          </div>
          <div class="col" id="clear">
            <span class="step-numbering step-three">3</span>
          </div>
        </div>

        <div class="row timeline-step">
          <div class="col-sm-12 col-md-6 col-lg-6" id="clear">
            <span class="step-numbering step-four">4</span>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-2 margin-img">
            <img src="{{ asset('assets/img/4.png') }}" alt="margin sharing image">
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 description-four">
            <p class="heading">Margin Sharing</p>
            <p class="paragraph" style="margin-left: 1.5rem">
              Pihak eMutan akan menerima pembagian margin sesuai dengan periode masing-masing proyek.
            </p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
    </div>
  </div>
</div>

<!-- /* ===== #JOINING FARMER ===== */ -->
<div class="join-section">
  <div class="top-image">
    <img src="{{ asset("assets/img/top-img.png") }}" alt="top-image">
  </div>

  <div class="white-box">
    <div class="box-content p-5">
      <div class="row top-row">
        <div class="col-sm-12 col-md-12 col-lg-12 join-header d-flex justify-content-center">
          <h2>Mengapa harus bergabung dengan <b class="span">E-mutan</b> ?</h2>
          <p class="caption">
            eMutan telah menyalurkan produk pertanian dengan biaya yang kurang lebih Rp100 Miliar kepada lebih dari 10.000+ petani.
          </p>
        </div>
      </div>
      <div class="row row-bottom-bx">
        <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
          <div class="content-image">
            <img src="{{ asset('assets/img/join-left-img.png') }}" alt="left-image-box">
          </div>
          <div class="content-box">
            <p class="font-bold">Memberdayakan Petani</p>
            <p>Mitra petani eMutan mendapatkan pendampingan yang baik.</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
          <div class="content-image">
            <img src="{{ asset('assets/img/join-cernter-img.png') }}" alt="center-image-box">
          </div>
          <div class="content-box">
            <p class="font-bold">Ramah Lingkungan</p>
            <p>eMutan akan memantau para petaninya untuk selalu menjalankan model pertanian yang ramah lingkungan</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
          <div class="content-image">
            <img src="{{ asset('assets/img/join-right-img.png') }}" alt="right-image-box">
          </div>
          <div class="content-box">
            <p class="font-bold">Ketahanan Pangan</p>
            <p>Pemberi modal berpartisipasi aktif dalam peningkatan produksi pangan dalam negeri</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-image">
    <img src="{{ asset('assets/img/bottom-img.png') }}" alt="bottom-image">
  </div>
</div>

{{-- MobileVersion --}}
<div class="mobile-version">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-7 content-version content-version-left">
        <div class="description mb-3">
          <p class="span-heading">Nikmati Kemudahan Dalam Mendapatkan Produk Pertanian</p>
          <h2 class="title">Unduh Aplikasi E-mutan Secara Gratis</h2>
        </div>
        <div class="content">
          <p class="description">
            Untuk memudahkan anda dalam mengakses dan melihat detail produk dari eMutan, silahkan download
            terlebih dahulu melalui link yang sudah tertera dibawah ini. Dapat di download melalui AppStore
            (IOS) dan PlayStore (Android).
          </p>
        </div>
        <div class="mobile-buttons">
          <a href="#" class="playstore text-decoration-none text-white">
            <div class="app-left">
              <img src="{{ asset('assets/img/google-playstore.png') }}" alt="playstore" width="20">
            </div>
            <div class="app-right">
              <small>Get it on</small>
              <span>Play Store</span>
            </div>
          </a>

          <a href="#" class="appstore text-decoration-none text-black">
            <div class="app-left">
              <img src="{{ asset('assets/img/google-appstore.png') }}" alt="playstore" width="20">
            </div>
            <div class="app-right">
              <small>Get it on</small>
              <span>App Store</span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-5 content-version content-version-right">
        <div class="mobile-image">
          <img src="{{ asset('assets/img/mobile-version2.png') }}" alt="gambar mobile 1">
          <img src="{{ asset('assets/img/mobile-version1.png') }}" alt="gambar mobile 2">
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End MobileVersion --}}

{{-- Registration --}}
<div class="regist-steps" id="mulai">
  <div class="container p-5 mt-5">
    <h2 class="fw-bold text-center text-white">How to <b class="text-black">Register</b> ?</h2>
    <span class="regis-line"></span>
    <div class="container-persteps">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
          <div class="bx-regis mb-2">
            <i class="bi bi-person-check"></i>
          </div>
          <p class="text-center fw-bold">Lengkapi Data Diri</p>
          <div class="step-description text-center">
            <p class="description">Data Anda dijamin aman dan digunakan dengan sebagaimana mestinya</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
          <div class="bx-regis mb-2">
            <i class="bi bi-credit-card"></i>
          </div>
          <p class="text-center fw-bold">Lengkapi Informasi Keuangan</p>
          <div class="step-description text-center">
            <p class="description">Informasi keuangan ini akan meliputi nomor rekening dan ahli akun pribadi anda</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" id="step-content">
          <div class="bx-regis mb-2">
            <i class="bi bi-file-earmark-arrow-up"></i>
          </div>
          <p class="text-center fw-bold">Unggah Dokumen</p>
          <div class="step-description text-center">
            <p class="description">Anda wajib mengunggah KTP, NPWP dan syarat lainnya untuk mendapatkan fasilitas dari kami.</p>
          </div>
        </div>
      </div>
      <div class="row row-bottom">
        <div class="col-sm-12 col-md-6 col-lg-12 btn-regis">
          <a href="#" target="_blank" class="regis-link">Register Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Registration --}}

{{-- Testimonials --}}
<div class="testimonial-users">
  <header class="section-header-test mt-5 col-lg-8">
    <h1 class="text-center">What Clients Say</h1>
    <p class="text-center">Kami mengumpulkan cerita dari mitra kami untuk membagikan pengalaman mereka bermodal maupun menerima modal melalui platform kami.</p>
  </header>

  <div class="container owl-carousel owl-theme testimonials-container mt-5">
    <div class="item testimonial-card">
      <main class="test-card-body">
        <p>
          <i class="bi bi-quote text-success h2"></i>
          eMutan bisa memberikan pemodalan dan pasar yang jelas, jadi proses budidaya yang lancar dan saya sudah mendapatkan kepastian kemana hasil panen akan dijual.
        </p>
      </main>
      <div class="profile">
        <div class="profile-image">
          <img src="{{ asset('assets/img/testimonials/img1.png') }}">
        </div>
        <div class="profile-desc">
          <span>Nunuk Sutanto</span>
          <span>Mitra Petani</span>
        </div>
      </div>
    </div>
    <!-- Item1 Ends -->

    <!-- Item2 Starts -->
    <div class="item testimonial-card">
      <main class="test-card-body">
        <p>
          <i class="bi bi-quote text-success h2"></i>
          Bersama eMutan, kita bersama-sama membantu petani untuk mendapatkan hidup yang sejahtera dengan penghasilan yang lebih baik. Hal ini sejalan dengan semangat baik dari Bank Mandiri untuk memakmurkan negeri.
        </p>
      </main>
      <div class="profile">
        <div class="profile-image">
          <img src="{{ asset('assets/img/testimonials/img2.png') }}">
        </div>
        <div class="profile-desc">
          <span>PT. Bank Mandiri</span>
          <span>Lender Institusional</span>
        </div>
      </div>
    </div>
    <!-- Item2 Ends -->

    <!-- Item5 Starts -->
    <div class="item testimonial-card">
      <main class="test-card-body">
        <p>
          <i class="bi bi-quote text-success h2"></i>
          Proses transaksi ditoko saya jauh lebih mudah dan praktis serta cepat setelah menggunakan eMutan. eMutan telah memberikan kemudahan transaksi jual beli produk.
        </p>
      </main>
      <div class="profile">
        <div class="profile-image">
          <img src="{{ asset('assets/img/testimonials/img5.png') }}">
        </div>
        <div class="profile-desc">
          <span>Devi Marlija</span>
          <span>Partner - Pemilik Toko</span>
        </div>
      </div>
    </div>
    <!-- Item5 Ends -->

    <!-- Item3 Starts -->
    <div class="item testimonial-card">
      <main class="test-card-body">
        <p>
          <i class="bi bi-quote text-success h2"></i>
          Ada 3 keunggulan dari eMutan yakni merupakan Produk pertanian, Manajemen sistem dan Sustainable market serta memiliki beberapa komoditas yang jelas.
        </p>
      </main>
      <div class="profile">
        <div class="profile-image">
          <img src="{{ asset('assets/img/testimonials/img3.png') }}">
        </div>
        <div class="profile-desc">
          <span>Ir. Soekam Punama</span>
          <span>Off-Taker</span>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Testimonials --}}

{{-- Permission --}}
<div class="permission-section">
  <div class="container">
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
        <img src="{{ asset('assets/img/izin-ojk.png') }}" class="img-fluid" alt="ojk">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="{{ asset('assets/img/izin-fintech.png') }}" class="img-fluid" alt="fintech">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="{{ asset('assets/img/izin-afpi.png') }}" class="img-fluid" alt="afpi">
      </div>
    </div>
  </div>
</div>
{{-- End Permission --}}

{{-- Footer --}}
<footer>
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

  <div class="about-info py-5 bg-dark">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 left-desc mb-5" style="text-align: justify">
                  <p class="pharagraph text-white">PT. eMutan Resources Indonesia (“EMUTAN”) selaku Penyelenggara
                      Layanan Berbasis Teknologi Informasi (peer to peer lending) yang telah berizin di Otoritas Jasa Keuangan
                      dengan
                      Nomor KEP-75/D.05/2021 pada tanggal 19 Agustus 2023 berdasarkan Peraturan Otoritas Jasa Keuangan
                      Nomor
                      10/POJK.05/2022 tentang Layanan Produk Bersama Berbasis Teknologi Informasi (LPBBTI).
                      PT eMutan Resources Indonesia merupakan badan hukum yang didirikan berdasarkan Hukum Republik
                      Indonesia.
                      Berdiri sebagai perusahaan yang telah diatur oleh dan dalam pengawasan Otoritas Jasa
                      Keuangan(OJK)
                      di
                      Indonesia, Perusahaan menyediakan layanan interfacing sebagai penghubung pihak yang memberikan
                      rekomendasi lewat
                      produk terkait - pilihan dalam situs ini.
                      Isi dan materi yang tersedia pada situs eMutan dimaksudkan untuk memberikan informasi dan tidak
                      dianggap
                      sebagai sebuah penawaran, permohonan, undangan, saran, maupun rekomendasi untuk menginvestasikan
                      sekuritas,
                      produk pasar modal, atau jasa keuangan lainnya. Perusahaan dalam memberikan jasanya hanya
                      terbatas
                      pada
                      fungsi administratif.
                      Produk dan modal yang ditempatkan di rekening eMutan adalah tidak dan tidak akan dianggap
                      sebagai
                      simpanan yang diselenggarakan oleh Perusahaan seperti diatur dalam Peraturan Perundang -
                      Undangan
                      tentang
                      Perbankan di Indonesia. Perusahaan atau setiap Direktur, Pegawai, Karyawan, Wakil, Afiliasi,
                      atau
                      Agen -
                      Agennya tidak memiliki tanggung jawab terkait dengan setiap gangguan atau masalah yang terjadi
                      atau
                      yang
                      dianggap terjadi yang disebabkan oleh minimnya persiapan atau publikasi dari materi yang
                      tercantum
                      pada
                      situs Perusahaan.</p>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 text-white right-desc" style="text-align: justify">
                  <p class="pharagraph">DISCLAIMER RISIKO :</p>
                  <li>Layanan Kami Berbasis Teknologi Informasi merupakan kesepakatan perdata antara
                      Pemberi
                      modal dengan penerima modal, sehingga segala risiko yang timbul dari kesepakatan tersebut
                      ditanggung
                      sepenuhnya oleh masing - masing pihak.</li>
                  <li>Risiko kredit atau gagal bayar ditanggung sepenuhnya oleh Pemberi modal.Tidak ada lembaga
                      atau
                      otoritas negara yang bertanggung jawab atas risiko gagal bayar ini.</li>
                  <li>Penyelenggara dengan persetujuan dari masing - masing Pengguna (Pemberi modal dan / atau
                      Penerima
                      modal) mengakses, memperoleh, menyimpan, mengelola, dan / atau menggunakan data pribadi
                      Pengguna
                      ("Pemanfaatan Data") pada atau di dalam benda, perangkat elektronik(termasuk smartphone atau
                      telepon
                      seluler), perangkat keras(hardware) maupun lunak(software), dokumen elektronik, aplikasi atau
                      sistem
                      elektronik milik Pengguna atau yang dikuasai Pengguna, dengan memberitahukan tujuan, batasan,
                      dan
                      mekanisme Pemanfaatan Data tersebut kepada Pengguna yang bersangkutan sebelum memperoleh
                      persetujuan yang
                      dimaksud.</li>
                  <li>Pemberi modal yang belum memiliki pengetahuan dan pengalaman tersebut, disarankan
                      untuk tidak
                      menggunakan layanan ini.</li>
                  <li>Penerima modal harus mempertimbangkan tingkat bunga modal dan biaya lainnya sesuai dengan
                      kemampuan dalam melunasi modal.</li>
                  <li>Setiap kecurangan tercatat secara digital di dunia maya dan dapat diketahui masyarakat luas di
                      media
                      sosial.</li>
                  <li>Pengguna harus membaca dan memahami informasi ini sebelum membuat keputusan menjadi Pemberi
                      modal
                      atau Penerima modal.</li>
                  <li>Pemerintah yaitu dalam hal ini Otoritas Jasa Keuangan, tidak bertanggung jawab atas setiap
                      pelanggaran
                      atau ketidakpatuhan oleh Pengguna, baik Pemberi modal maupun Penerima modal(baik karena
                      kesengajaan
                      atau kelalaian Pengguna) terhadap ketentuan peraturan perundang - undangan maupun kesepakatan
                      atau
                      perikatan antara Penyelenggara dengan Pemberi modal dan / atau Penerima modal.</li>
                  <li>Setiap transaksi dan kegiatan pinjam meminjam atau pelaksanaan kesepakatan mengenai pinjam
                      meminjam
                      antara atau yang melibatkan Penyelenggara, Pemberi modal, dan / atau Penerima modal wajib
                      dilakukan
                      melalui escrow account dan virtual account sebagaimana yang diwajibkan berdasarkan Peraturan
                      Otoritas Jasa
                      Keuangan Nomor 10/POJK.05/2022 tentang Layanan Produk Bersama Berbasis Teknologi Informasi
                      (LPBBTI) dan
                      pelanggaran atau ketidakpatuhan terhadap ketentuan tersebut merupakan bukti telah terjadinya
                      pelanggaran
                      hukum oleh Penyelenggara sehingga Penyelenggara wajib menanggung ganti rugi yang diderita oleh
                      masing -
                      masing Pengguna sebagai akibat langsung dari pelanggaran hukum tersebut di atas tanpa mengurangi
                      hak
                      Pengguna yang menderita kerugian menurut Kitab Undang - Undang Hukum Perdata.</li>
              </div>
          </div>
      </div>
  </div>

  <div class="text-center p-3 foodnote" style="background-color: rgba(0, 0, 0, 0.2)">
      Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
      <img src="{{ asset('assets/img/izin-ojk.png') }}" alt="ojk" class="img-fluid" width="45">
  </div>
</footer>
{{-- End Footer --}}

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
@endsection
