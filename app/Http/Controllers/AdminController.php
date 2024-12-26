<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PekerjaService;
use App\Service\UserService;
use App\Service\LowonganService;

class AdminController extends Controller
{

    protected $pekerjaService;
    protected $userService;
    protected $lowonganService;

    public function __construct(
        PekerjaService $pekerjaService,
        UserService $userService,
        LowonganService $lowonganService
    ){
        $this->pekerjaService = $pekerjaService;
        $this->userService = $userService;
        $this->lowonganService = $lowonganService;
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function pekerja(){
        $pekerja = $this->pekerjaService->getAlls();
        return view('admin.pekerja.index', compact('pekerja'));
    }

    public function user(){
        $user = $this->userService->getAlls();
        return view('admin.user.index', compact('user'));
    }

    public function lowongan(){
        $lowongan = $this->lowonganService->getAlls();
        return view('admin.lowongan.index', compact('lowongan'));
    }

}
