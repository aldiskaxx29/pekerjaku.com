<?php

namespace App\Http\Controllers;

use App\Service\KategoriService;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    protected $kategoriService;

    public function __construct(
        KategoriService $kategoriService
    )
    {
        $this->kategoriService = $kategoriService;
    }

    public function getAll(){
        return $this->kategoriService->getAll();
    }

    public function getOne(){
        return $this->kategoriService->getOne();
    }

    public function save(){
        return $this->kategoriService->save();
    }

    public function delete(){
        return $this->kategoriService->delete();
    }
}
