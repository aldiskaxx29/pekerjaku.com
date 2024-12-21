<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(
        UserService $userService
    )
    {
        $this->userService = $userService;
    }

    public function index(){
     return view('admin.user.index');           
    }

    public function getAll(){
        return $this->userService->getAll();
    }

    public function getOne(){
        return $this->userService->getOne();
    }

    public function save(){
        return $this->userService->save();
    }

    public function delete(){
        return $this->userService->delete();
    }
}
