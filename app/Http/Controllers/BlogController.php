<?php

namespace App\Http\Controllers;

use App\Service\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(
        BlogService $blogService
    )
    {
        $this->blogService = $blogService;
    }

    public function index(){
        return view('landingpage.blog');
    }

    public function getAll(){
        return $this->blogService->getAll();
    }
    public function getOne(){
        return $this->blogService->getOne();
    }
    public function save(){
        return $this->blogService->save();
    }
    public function delete(){
        return $this->blogService->delete();
    }
}
