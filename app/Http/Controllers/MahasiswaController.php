<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        //file view ada pada folder layout
        return view('layout.home');
    }
}