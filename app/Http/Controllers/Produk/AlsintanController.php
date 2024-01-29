<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlsintanController extends Controller
{
    public function index() {
      return view('produk.alsintan.index');
    }
}
