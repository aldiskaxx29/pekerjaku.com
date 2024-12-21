<?php

namespace App\Http\Controllers;

use App\Service\LowonganService;
use Illuminate\Http\Request;

class LowonganController extends Controller
{   

    protected $lowonganService;

    public function __construct(
        LowonganService $lowonganService
    )
    {
        $this->lowonganService = $lowonganService;
    }

    public function index(){
        return view('landingpage.lowongan');
    }

    public function getAll(){   
        return $this->lowonganService->getAll();
    }   

    public function getOne(){
        return $this->lowonganService->getOne();
    }
    
    public function save(){
        return $this->lowonganService->save();
    }

    public function delete(){
        return $this->lowonganService->delete();
    }
}
