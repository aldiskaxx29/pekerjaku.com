<?php

namespace App\Http\Controllers;

use App\Service\KategoriService;
use App\Service\PekerjaService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $kategoriService;
    protected $pekerjaService;

    public function __construct(
        KategoriService $kategoriService,
        PekerjaService $pekerjaService
    )
    {
        $this->kategoriService = $kategoriService;
        $this->pekerjaService = $pekerjaService;
    }
    public function index(){
        $data = $this->pekerjaService->getAlls();
        $pekerja = $data->where('kategori_id', 1)->where('user.level_user', 3);
        $kategori = $this->kategoriService->getAlls();
        return view('landingpage.index', compact('kategori','pekerja'));
    }

    
}
