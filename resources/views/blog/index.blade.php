@extends('layouts.master')

@section('title')
    Halaman blog
@endsection

@section('content')
    <div class="container container-blogs my-3">
        <div class="row">
            <div class="col-md-8 mx-2 rounded mb-3">
                <div class="card-artikel rounded mb-3 overflow-hidden p-3">
                    <img class="img-fluid img-thumbs rounded" src="{{ asset('assets/img/blogs/kedelai.png') }}" alt="gambar artikel">
                    <h2 class="blogs-title mt-3 mb-3 fw-semibold">Menjawab tantangan pengembang benih kedelai 2022
                    </h2>
                    <p>Menurut Wulan Joe (2011:3), Kedelai, atau kacang kedelai, adalah salah satu tanaman jenis
                        polong-polongan yang menjadi bahan dasar banyak makanan dari Asia Timur seperti susu, kecap, tahu,
                        dan tempe. Berdasarkan peninggalan arkeologi, tanaman ini telah dibudidayakan sejak 3500 tahun yang
                        lalu di Asia Timur.</p>
                    <p>Kedelai merupakan sumber utama protein nabati dan minyak nabati dunia. Penghasil kedelai utama dunia
                        adalah Amerika Serikat, meskipun kedelai praktis baru dibudidayakan masyarakat di luar Asia setelah
                        1910.</p>

                    <a href="{{ url('blogs_s') }}"
                        class="btn-telusuri link-item text-decoration-none text-white fw-semibold p-2 mt-3">
                        Pelajari lebih lanjut
                        &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
                    </a>
                </div>
                <div class="card-artikel rounded mb-3 overflow-hidden p-3">
                    <img class="img-fluid img-thumbs rounded" src="{{ asset('assets/img/blogs/news-image.png') }}"
                        alt="gambar artikel">
                    <h2 class="blogs-title mt-3 mb-3 fw-semibold">Cara menanam padi yang baik dan benar</h2>
                    <p>Cara menanam padi yang baik dan benar sangat penting untuk diketahui oleh para petani guna
                        meningkatkan hasil produksi padi setiap masa panen datang karena permintaan beras yang tidak pernah
                        menurun. Hal ini membuat para petani harus dapat melakukan berbagai hal untuk menghasilkan panen
                        padi yang melimpah. Tujuannya tentu saja demi terpenuhinya seluruh kebutuhan pokok masyarakat dalam
                        negeri. Untuk itu, para petani seharusnya memiliki pengetahuan dasar terkait cara penanaman padi
                        yang baik dan benar agar hasil panennya pun sesuai dengan target.</p>

                    <a href="{{ url('blogs_d') }}"
                        class="btn-telusuri link-item text-decoration-none text-white fw-semibold p-2 mt-3">
                        Pelajari lebih lanjut
                        &nbsp; <i class="bi bi-box-arrow-in-up-right"></i>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md mx-2 p-3 rounded">
                <form action="#" method="get">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Cari artikel" aria-label="Cari artikel"
                            aria-describedby="basic-addon1">
                    </div>
                </form>

                <h2 class="blogs-title mt-4">Postingan Populer</h2>
                <span class="blogs-line"></span>
                <div class="label-posts">
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ url('blogs_s') }}" class="text-decoration-none text-primary">Menjawab tantangan pengembang benih
                                kedelai 2022</a>
                        </li>
                        <li>
                            <a href="{{ url('blogs_d') }}" class="text-decoration-none text-primary">Cara menanam padi yang baik dan
                                benar</a>
                        </li>
                    </ul>
                </div>


                <h2 class="blogs-title mt-4">Postingan Tags</h2>
                <span class="blogs-line"></span>
                <div class="tags-posts">
                    <button class="btn btn-outline-secondary btn-sm m-1">cabe</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">jagung</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">kedelai</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">petani</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">sawah</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">bibit</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">padi</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">alsintan</button>
                    <button class="btn btn-outline-secondary btn-sm m-1">obat-obatan</button>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>

    <div class="permission-section bg-light">
        <div class="container text-black">
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
                    <img src="{{ asset('../assets/img/izin-ojk.png') }}" class="img-fluid" alt="ojk">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src="{{ asset('../assets/img/izin-fintech.png') }}" class="img-fluid" alt="fintech">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <img src="{{ asset('../assets/img/izin-afpi.png') }}" class="img-fluid" alt="afpi">
                </div>
            </div>
        </div>
    </div>

    <!-- /* ===== #FOOTER ===== */ -->
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

        <!-- /* ===== #FOODNOTE ===== */ -->
        <div class="text-center p-3 foodnote" style="background-color: black; color: white">
            Copyright 2022-2028 © PT. Emutan Indonesia telah Berizin dan Diawasi oleh
            <img src="{{ asset('../assets/img/izin-ojk.png') }}" alt="ojk" class="img-fluid" width="45">
        </div>
    </footer>

    <!-- script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
@endsection
