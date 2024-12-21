<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajikanController extends Controller
{
    public function index(){
        return view('majikan.dashboard');
    }

    public function dataDiri(){
        return view('majikan.data_diri');
    }

    public function dataPekerja(){
        return view('majikan.data_pekerja');
    }

    public function dataOrder(){
        return view('majikan.data_pesan');
    }
}
