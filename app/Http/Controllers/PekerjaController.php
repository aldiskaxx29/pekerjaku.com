<?php

namespace App\Http\Controllers;

use App\Service\KategoriService;
use App\Service\PekerjaService;
use App\Service\UserService;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    protected $pekerjaService;
    protected $kategoriService;
    protected $usersService;

    public function __construct(
        PekerjaService $pekerjaService,
        KategoriService $kategoriService,
        UserService $userService
    )
    {
        $this->usersService = $userService;
        $this->kategoriService = $kategoriService;
        $this->pekerjaService = $pekerjaService;
    }
        
    public function index(){
        $pekerja = $this->pekerjaService->getAlls()->where('user.level_user', 3);
        $kategori = $this->kategoriService->getAlls();
        return view('landingpage.pekerja', compact('kategori', 'pekerja'));
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
