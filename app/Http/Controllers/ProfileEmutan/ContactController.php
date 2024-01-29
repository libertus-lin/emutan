<?php

namespace App\Http\Controllers\ProfileEmutan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
      // menampilkan seluruh data yang masuk lewat form contact person
      return view('profileEmutan.contact.index');
    }

    public function show() {
      //
    }

    public function create() {
      //
    }

    public function edit() {
      //
    }

    public function update() {
      //
    }

    public function destroy() {
      //
    }
}
