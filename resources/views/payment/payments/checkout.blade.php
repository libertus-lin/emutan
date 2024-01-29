@extends('layouts.template')

@section('title')
    Halaman checkout
@endsection

@section('content')
    <section class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 bg-produk-left container">
                <h5 class="mb-3">Checkout</h5>
                <p class="fw-bold">Alamat Pengiriman</p>
                <hr>
                <div class="data-pemesan">
                    <p class="m-0 fw-bold">Oyon Ternando</p>
                    <p class="m-0 fw-bold">628575446762</p>
                    <p class="alamat-pemesan">
                        (Cibubur Palm Resort, Jl. Leuwinanggung, Tapos, Kota Depok, Jawa Barat) <br>Tapos, Kota Depok, 16456
                    </p>
                </div>
                <hr>

                <!-- Button trigger modal -->
                <button type="button" class="rounded px-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                    style="border: 1px solid rgb(172, 172, 172)">
                    Ubah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                    style="text-align: left !important">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-3" id="staticBackdropLabel">Ubah Alamat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <div>
                                            <span class="fw-bold">Susanti Santi</span> |
                                            <span>628575441234</span>
                                            <br>
                                            <p style="text-align: justify">
                                                (Cibubur Palm Resort, Jl. Leuwinanggung, Tapos, Kota Depok, Jawa
                                                Barat), Tapos, Kota Depok, 16456
                                            </p>
                                        </div>
                                    </label>
                                </div>

                                <div class="form-check me-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <div>
                                            <span class="fw-bold">Oyon Ternando</span> |
                                            <span>628575446762</span>
                                            <br>
                                            <p style="text-align: justify">
                                                (Cibubur Palm Resort, Jl. Leuwinanggung, Tapos, Kota Depok, Jawa
                                                Barat), Tapos, Kota Depok, 16456
                                            </p>
                                        </div>
                                    </label>
                                </div>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                + Tambah Alamat Baru
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <form>
                                                    <div class="row g-3">
                                                        <div class="col form-group mb-3">
                                                            <label for="nama" class="col-form-label">Nama</label>
                                                            <input type="text" id="nama" class="form-control"
                                                                placeholder="Nama">
                                                        </div>
                                                        <div class="col form-group mb-3">
                                                            <label for="kontak" class="col-form-label">Nomor
                                                                Telp/WA</label>
                                                            <input type="number" id="kontak" class="form-control"
                                                                placeholder="Nomor Telepon">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group mb-3">
                                                            <label for="alamat" class="col-form-label">Alamat</label>
                                                            <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group mb-3">
                                                            <label for="detail-lainnya" class="col-form-label">Detail
                                                                Lainnya</label>
                                                            <textarea class="form-control" name="detail-lainnya" id="detail-lainnya" rows="5" placeholder="Detail lainnya"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group d-flex justify-content-between">
                                                        <button type="button" class="px-3 rounded border-0"
                                                            style="background: #107869; color: white;">Nanti Saja</button>
                                                        <button type="button" class="px-3 rounded border-0"
                                                            style="background: #107869; color: white;"
                                                            onclick="simpanDataBaru()">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-body mt-4 d-flex ms-auto">
                                <button type="submit" class="btn btn-primary" style="border: none; background: #107869">
                                    <i class="ri-secure-payment-fill"> Konfirmasi</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-bold">Produk di Pesanan</th>
                                <th></th>
                                <th scope="col" class="fw-normal">Harga Satuan</th>
                                <th scope="col" class="fw-normal">Jumlah</th>
                                <th scope="col" class="fw-normal">Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-flex">
                                  <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="20%">
                                    <p>Nitrea</p>
                                </td>
                                <td colspan="2">Rp. 520.000</td>
                                <td>1</td>
                                <td>Rp. 520.000</td>
                            </tr>
                            <tr>
                                <td class="d-flex">
                                  <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="20%">
                                    <p>Phonska</p>
                                </td>
                                <td colspan="2">Rp. 100.000</td>
                                <td>1</td>
                                <td>Rp. 100.000</td>
                            </tr>
                            <tr style="background-color: #f4f4f4;" class="pengiriman-pesanan">
                                <td class="d-flex justify-content-start align-items-start">
                                    <input type="checkbox" class="m-3">
                                    <p class="fw-bold">
                                        Asuransi Barang <br>
                                        <small class="fw-normal">Melindungi produkmu dari kerusakan/kerugian</small>
                                    </p>
                                </td>
                                <td colspan="2">Rp. 10.000</td>
                                <td>2</td>
                                <td>Rp. 20.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>

                <p class="fw-bold">Pengiriman</p>
                <div class="jasa-pengiriman d-flex justify-content-between">
                    <div>
                        <select class="form-select pilih-ekspedisi">
                            <option disabled>Pilih Ekspedisi</option>
                            <option selected disabled>Reguler</option>
                            <option value="JNE">JNE</option>
                            <option value="Express">Express</option>
                        </select>
                    </div>
                    <p>Rp. 20.000</p>
                </div>
                <hr>
                <div class="subtotal-produk d-flex justify-content-between">
                    <p class="fw-bold">Subtotal</p>
                    <p>Rp. 640.000</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 bg-produk-right">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center align-content-center mt-2">
                            <p>Saldo</p>
                            <p>Rp. 20.000.000</p>
                        </div>
                        <hr>
                        <div class="record-total-belanja mb-3">
                            <p class="fw-bold mb-3">Ringkasan Belanja</p>
                            <div class="d-flex justify-content-between">
                                <p>Total Harga (2 Produk)</p>
                                <p>Rp. 620.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Total Ongkir</p>
                                <p>Rp. 20.000</p>
                            </div>
                        </div>
                        <hr>
                        <div class="details-belanja">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="text-black fw-bold">Total Tagihan</p>
                                <p class="text-black fw-bold">Rp. 640.000</p>
                            </div>
                            <div class="d-flex justify-content-between">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary d-flex w-100 justify-content-center" data-bs-toggle="modal"
                                    data-bs-target="#bayar" style="border: none; background: #107869">
                                    Pilih Pembayaran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="bayar" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="bayarLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="bayarLabel">Pembayaran</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="mb-4">Metode Pembayaran</h5>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        <img src="{{ asset('assets/img/bca.png') }}" alt="bca va"
                                                            width="35">
                                                        BCA Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                </div>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ asset('assets/img/bni.png') }}" alt="bni va"
                                                            width="35">
                                                        BNI Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                </div>
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ asset('assets/img/bri.png') }}" alt="bri va"
                                                            width="35"> BRI Virtual
                                                        Account
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body">
                                                <div class="form-check d-flex justify-content-between">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <img src="{{ asset('assets/img/dompet-mutan.png') }}"
                                                            alt="dompet mutan" width="30">
                                                        Dompet Mutan
                                                    </label>
                                                    <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body">
                                                <h5 class="mb-3">Ringkasan Pembayaran</h5>
                                                <div class="d-flex justify-content-between">
                                                    <span class="fs-6">Total Belanja</span>
                                                    <span class="fs-6">Rp 820,000</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span class="fs-6">Biaya Layanan <i
                                                            class="ri-information-fill"></i></span>
                                                    <span class="fs-6">Rp 1,000</span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="modal-body d-flex justify-content-between">
                                                <span class="fs-6 fw-bold">Total Tagihan</span>
                                                <span class="fs-6">Rp 821,000</span>
                                            </div>
                                            <div class="modal-body mt-4">
                                                <a href="{{ url('payments') }}" class="btn btn-primary float-end">
                                                    <i class="ri-secure-payment-fill"> Bayar Sekarang</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function simpanDataBaru() {
        alert('Data berhasil di tambahkan!');
    }
</script>
