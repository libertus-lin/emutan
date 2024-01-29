
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <!-- Logo Emutan -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/emutanlg.png') }}">
      </a>

      <!-- Toggle Menu -->
      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon toggle-sidebar-btn" href="#">
          <i class="bi bi-list"></i>
        </a>
      </li><!-- End Toggle Menu -->
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
          <a class="nav-link nav-icon" href="#">
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
