<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Emutan | Halaman login petani</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-emutan.png') }}" type="image/x-icon">
    <!-- bootstrap & bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            height: 100vh;
            display: flex;
        }

        select {
            border-color: #ddd;
        }

        @media only screen and (max-width: 600px) {
            img {
                width: 50%;
            }

            h4.heading {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- /* ===== #FORM-LOGIN ===== */ -->
    <div class="container m-auto">
        <div class="container-login m-auto">
            <div class="row header-login">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center box-header-login">
                    <a href={{ '/' }}>
                        <img class="img-fluid mb-3" src="{{ asset('assets/img/emutanlg.png') }}" alt="logo emutan"
                            width="300">
                    </a>
                    <div class="languages">
                        <select name="select-lg" class="pilihan-bahasa px-3 py-1 rounded">
                            <option value="Indonesia">Indonesia</option>
                            <option value="English">English</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center main-login pt-4">
                <div class="col-sm-12 col-md-12 col-lg-4 text-center main-box-login">
                    <h4 class="text-start heading pt-3 pb-4 fw-bold">Sign In</h4>

                    <form method="POST" action="">
                        <div class="form-group text-start">
                            <div class="form-floating mt-3 mb-3">
                                <input id="email" type="email"
                                    class="form-control" name="email" required autocomplete="email" autofocus
                                    placeholder="Email">
                                <label for="email" style="color: #7b7b7b">
                                    <i class="bi bi-person"></i> Masukkan Email
                                </label>
                            </div>
                        </div>

                        <div class="form-group text-start">
                            <div class="form-floating mt-3 mb-3">
                                <input id="password" type="password"
                                    class="form-control" name="password" required autocomplete="password" autofocus
                                    placeholder="password">
                                <label for="password" style="color: #7b7b7b">
                                  <i class="bi bi-lock"></i> Masukkan Password
                                </label>
                            </div>
                        </div>

                        <div class="form-group text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                                <a href={{ '/forgot_password' }} class="text-decoration-none float-end" style="color: #7b7b7b">
                                    Lupa password?
                                </a>
                            </div>
                        </div>
                        <div class="form-group pt-5 pb-5">
                            <button type="button" style="background-color: #1a5653; border: none"
                                class="d-flex justify-content-center w-100 d-flex btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                {{ __('Login') }}
                            </button>

                            <p class="text-center mt-4">Belum memiliki akun?
                                <a href="{{ url('register') }}"
                                    class="btn-daftar text-decoration-none" style="color: #7b7b7b">Daftar</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ 'assets/img/true.png' }}" class="mb-3">
                    <p>Anda berhasil login</p>
                </div>
                <div class="modal-body text-center">
                    <a href="userpages" id="success_login" class="btn btn-success btn-sm">
                        Oke
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"
        integrity="sha256-IW9RTty6djbi3+dyypxajC14pE6ZrP53DLfY9w40Xn4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css"
        integrity="sha256-ZCK10swXv9CN059AmZf9UzWpJS34XvilDMJ79K+WOgc=" crossorigin="anonymous">
    <script src="{{ asset('assets/js/app.js') }}"></script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            $('#masuk').on('click', function(event) {
                event.preventDefault();
                var email = $('#email').val();
                var password = $('#password').val();
                let token = $("meta[name='csrf-token']").attr("content");

                $.ajax({
                    url: 'http://127.0.0.1:8000/login/cek_login',
                    type: "POST",
                    cache: false,
                    data: {
                        "email": email,
                        "password": password,
                        "_token": token
                    },
                    beforeSend: function(data) {
                        Swal.fire({
                            title: 'Loading...',
                            scrollbarPadding: false,
                            didOpen: () => {
                                Swal.showLoading()
                            }
                        });
                    },
                    success: function(data) {
                        Swal.close();
                        if (data.success == true) {
                            $("#staticBackdrop").modal('show');
                            if (data.data.role == 'user') {
                                $('#success_login').attr('href', '{{ url('userpages') }}')
                            } else if (data.data.role == 'admin') {
                                $('#success_login').attr('href', '{{ url('admin') }}')

                            }
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: data.message
                            });
                        }
                    }
                }, false)
            })
        })
    </script> --}}

</body>

</html>
