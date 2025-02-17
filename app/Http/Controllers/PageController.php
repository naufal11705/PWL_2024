<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Ahmad Naufal Waskito Aji <br>
                2341720080';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
