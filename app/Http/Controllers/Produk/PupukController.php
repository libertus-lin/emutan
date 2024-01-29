<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function index() {
      return view('produk.pupuk.index');
    }
}
