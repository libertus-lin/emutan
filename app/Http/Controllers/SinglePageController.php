<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function blogs_s() {
        return view('blog.blogs_s');
    }

    public function blogs_d() {
        return view('blog.blogs_d');
    }
}
