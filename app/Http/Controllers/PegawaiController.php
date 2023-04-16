<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // return view('berita');
        //file view ada pada folder layout
        return view('layout.berita');
    }
}
