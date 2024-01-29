<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Emutan | Halaman register petani</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/logo-emutan.png') }}" type="image/x-icon">
  <!-- bootstrap & bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
    body {
      height: 100vh;
      display: flex;
    }
  </style>
</head>

<body>

  <!-- /* ===== #TAB=CHOICE ===== */ -->
  <div class="container m-auto">
    <div class="container-login m-auto col-sm-12 col-md-12 col-lg-6 pt-4">

      <div class="row header-login mb-4">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center box-header-login">
          <a href="{{ url('/') }}">
            <img class="img-fluid mb-4" src="{{ asset('assets/img/emutanlg.png') }}" alt="logo emutan" width="300">
          </a>
          <div class="languages">
            <i class="bi bi-globe text-black"></i>
            <select name="select-lg" class="pilihan-bahasa" style="border: none;">
              <option value="Indonesia">Indonesia</option>
              <option value="English">English</option>
            </select>
          </div>
        </div>
      </div>

      <h4 class="text-start heading pt-3 fw-bold">Daftar eMutan</h4>

      <div class="row">
        <div class="col-12">
          <div class="tab-content">

            <!-- Menu Daftar Petani -->
            <div id="petani" class="tab-pane fade in active show">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 my-5">
                  <form method="POST" action="#">
                    <div class="form-group mb-3">
                      <label for="nama" class="form-label d-flex">{{ __('Nama Lengkap') }}
                        &nbsp; <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group mb-3">
                      <label for="email" class="form-label d-flex">{{ __('Email') }}
                        &nbsp; <span class="text-danger">*</span>
                      </label>
                      <input type="email" class="form-control" placeholder="Masukkan email">
                    </div>
                    <div class="form-group text-start">
                      <label for="noTelp" class="form-label d-flex">{{ __('Nomor Telepon') }}
                        &nbsp; <span class="text-danger">*</span>
                      </label>
                      <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Masukkan nomor telepon">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="password" class="form-label d-flex">Password
                        &nbsp; <span class="text-danger">*</span>
                      </label>
                      <input type="password" class="form-control" placeholder="Masukkan password">
                    </div>
                    <div class="form-group mb-3">
                      <label for="ulangiPassword" class="form-label d-flex">Konfirmasi Password
                        &nbsp; <span class="text-danger">*</span>
                      </label>
                      <input type="password" class="form-control" placeholder="Konfirmasi Password">
                    </div>

                    <div class="form-group mb-3 d-flex">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                          ? 'checked' : '' }}>
                        <label class="form-label" for="remember">
                          {{ __('Saya menerima kebijakan marketing & ketentuan privasi dari E-mutan') }}
                        </label>
                      </div>
                    </div>

                    <div class="form-group pt-5 pb-5">
                      <button type="button" style="background-color: #1a5653; border: none"
                        class="d-flex justify-content-center w-100 d-flex btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Daftar
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-6" id="staticBackdropLabel">
                                {{ __('Berhasil') }}
                              </h1>
                              <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                              <img src="{{ asset('assets/img/true.png') }}" class="mb-3">
                              <p>Data anda berhasil di daftarkan</p>
                            </div>
                            <div class="modal-body text-center">
                              <a href="{{ url('login') }}" class="btn btn-success btn-sm">
                                Oke
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-4 text-center">
                        Sudah memiliki akun?
                        <a href="{{ url('login') }}" class="btn-daftar text-decoration-none">Masuk</a>
                      </p>
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

  <!-- script -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

</body>

</html>
