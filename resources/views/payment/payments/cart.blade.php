@extends('layouts.template')

@section('title')
    Halaman keranjang
@endsection

@section('content')
    <section class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 bg-produk-left container">
                <h5>Keranjang</h5>
                <hr>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-center">
                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk.png') }}" width="50%"
                            style="display: block; margin: auto"><br>
                            <!-- Button trigger modal -->
                            <button type="button" class="rounded border-0"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Tulis Pesan
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="text-align: left !important">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-3" id="staticBackdropLabel">Tulis Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <fieldset>
                                              <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label text-left">Pesan</label>
                                                <textarea class="form-control" name="pesan" id="pesan" rows="10" placeholder="Masukkan pesan"></textarea>
                                              </div>
                                            </fieldset>
                                          </form>
                                        </div>
                                        <div class="modal-body mt-4">
                                            <button type="submit" class="btn btn-primary float-end" style="border: none; background: #107869">
                                                <i class="ri-secure-payment-fill"> Simpan</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-6">
                            <div class="group-details-pesanan">
                                <p>Nitrea</p>
                                <p>Rp. 520.000</p>
                            </div>
                            <a onclick="alert('Berhasil di hapus')" href="#" class="text-decoration-none text-black">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <div class="button-pesanan">
                                <a id="minProduct" href="" class="px-3 py-1 m-0 text-black rounded-start-2"
                                    style="border: 1px solid #ddd">-</a>
                                <a id="countLabel" href="" class="px-3 py-1 m-0 text-black"
                                    style="border: 1px solid #ddd">0</a>
                                <a id="maxProduct" href="" class="px-3 py-1 m-0 text-black rounded-end-2"
                                    style="border: 1px solid #ddd">+</a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-3 text-center">
                          <img src="{{ asset('../assets/img/pupuk/pupuk/pupuk1.png') }}" width="50%"
                            style="display: block; margin: auto"><br>
                            <!-- Button trigger modal -->
                            <button type="button" class="rounded border-0"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Tulis Pesan
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="text-align: left !important">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-heade">
                                            <h1 class="modal-title fs-3" id="staticBackdropLabel">Tulis Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            <fieldset>
                                              <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label text-left">Pesan</label>
                                                <textarea class="form-control" name="pesan" id="pesan" rows="10" placeholder="Masukkan pesan"></textarea>
                                              </div>
                                            </fieldset>
                                          </form>
                                        </div>
                                        <div class="modal-body mt-4">
                                            <button type="submit" class="btn btn-primary float-end" style="border: none; background: #107869">
                                                <i class="ri-secure-payment-fill"> Simpan</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="group-details-pesanan">
                                <p>Phonska</p>
                                <p>Rp. 100.000</p>
                            </div>
                            <a onclick="alert('Berhasil di hapus')" href="#"
                                class="text-decoration-none text-black">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <div class="button-pesanan">
                                <a href="" class="px-3 py-1 m-0 text-black rounded-start-2"
                                    style="border: 1px solid #ddd">-</a>
                                <a href="" class="px-3 py-1 m-0 text-black" style="border: 1px solid #ddd">1</a>
                                <a href="" class="px-3 py-1 m-0 text-black rounded-end-2"
                                    style="border: 1px solid #ddd">+</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="background: #F1F1F1">
                    <div class="card-body p-4 rounded-4" style="border: 1px solid rgb(177, 176, 176)">
                        <div class="d-flex justify-content-between mb-3">
                            <span class="fw-bold">Saldo</span> <br />
                            <span class="fw-bold">Rp. 20.000.000</span>
                        </div>
                        <hr />
                        <div class="mb-3">
                            <span class="fw-bold">Ringkasan Belanja</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Nitrea</span> <br />
                            <span class="fw-bold">Rp. 520.000</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Phonska</span> <br />
                            <span class="fw-bold">Rp. 100.000</span>
                        </div>
                        <hr>
                        <div class="details-belanja">
                            <div class="d-flex justify-content-between mb-3">
                                <p class="text-black fw-bold">Total Belanja</p>
                                <p class="text-black fw-bold">Rp. 620.000</p>
                            </div>
                            <div class="text-center">
                                <a href="{{ url('checkouts') }}" class="text-white rounded-2 d-block w-100 py-2"
                                    style="background: #107869">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
@endsection
