@extends('admin.layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Produk Alsintan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a href="" class="btn btn-primary">Tambah Produk</a>
    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Nama Alsintan</th>
                            <th>Detail Produk</th>
                            <th>Komoditas</th>
                            <th>Stok</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alsintan A</td>
                            <td>Alsintan Super</td>
                            <td>Jagung</td>
                            <td>20</td>
                            <td class="text-center">-</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
            </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection