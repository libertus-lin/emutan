<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        return view('admin.user');
    }

    public function pupuk(){
        return view('admin.produk.pupuk');
    }

    public function bibit(){
        return view('admin.produk.bibit');
    }

    public function obat(){
        return view('admin.produk.obat');
    }

    public function alsintan(){
        return view('admin.produk.alsintan');
    }

    public function pendanaan(){
        return view('admin.proyek');
    }

    public function transaksi(){
        return view('admin.transaksi');
    }
}
