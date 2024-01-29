<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BibitController extends Controller
{
    public function index() {
      return view('produk.bibit.index');
    }
}
