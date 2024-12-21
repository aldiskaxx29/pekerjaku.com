<?php

namespace App\Http\Controllers;

use App\Service\PekerjaService;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    protected $pekerjaService;

    public function __construct(
        PekerjaService $pekerjaService
    )
    {
        $this->pekerjaService = $pekerjaService;
    }

    public function index(){
        return view('landingpage.pekerja');
    }

    public function dashboard(){
        return view('pekerja.dashboard');
    }

    public function lowongan(){
        return view('pekerja.lowongan');
    }

    public function dataDiri(){
        return view('pekerja.data_diri');
    }

    public function detailPekerja($id){
        $data = $this->pekerjaService->getOnes($id);
        $p = $this->pekerjaService->getALls()->where('id','!=', 1);
        $pekerja = collect($p)->take(4);
        return view('landingpage.detail', compact('data','pekerja'));
    }

    public function getAll(){
        return $this->pekerjaService->getAll();
    }

    public function getOne(){
        return $this->pekerjaService->getOne();
    }

    public function save(){
        return $this->pekerjaService->save();
    }

    public function delete(){
        return $this->pekerjaService->delete();
    }
}
