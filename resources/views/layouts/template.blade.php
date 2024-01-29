<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Emutan,">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
  {{-- <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet" />
  <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet" />
  <title>Emutan | @yield('title')</title>
  <style>
    body {
      font-size: 13px
    }
    p, a {
      font-size: 14px
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <!-- Logo Emutan -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('userpages') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/emutanlg.png') }}">
      </a>
    </div>
    <!-- End Logo Emutan -->

    <!-- Navigation -->
    <nav class="header-nav ms-auto">
      <!-- Icons Navigation -->
      <ul class="d-flex align-items-center">

        <!-- Notifications -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <!-- <i class="bi bi-bell"></i> -->
            <i class='bx bx-bell bx-sm'></i>
            <span class="badge bg-primary badge-number">1</span>
          </a>

          <!-- Notifications Dropdown -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>
          </ul><!-- End Notifications Dropdown -->
        </li>
        <!-- End Notifications -->

        <!-- Messages -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="{{ url('carts') }}">
            <i class='bx bx-cart bx-sm'></i>
            <span class="badge bg-success badge-number">1</span>
          </a>
        </li>
        <!-- End Messages -->

        <!-- Account -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('frontend/img/img1.png') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Yondri Ternando</span>
          </a>

          <!-- Eccount Dropdown -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="text-start dropdown-header">
              <h6>Yondri Ternando</h6>
              <span>Petani</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url("userpages") }}">
                <i class='bx bx-home-alt-2'></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url("dashboards") }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url("/") }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Eccount Dropdown -->
        </li><!-- End Account -->
      </ul><!-- End Icons Navigation -->
    </nav><!-- Navigation -->
  </header>
  <!-- End Header -->


  @yield('content')

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('frontend/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('frontend/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

  @yield('js')
</body>

</html>
