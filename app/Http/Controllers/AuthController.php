<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $authService;
    protected $request;

    public function __construct(
        AuthService $authService,
        Request $request
    )
    {
        $this->authService = $authService;
        $this->request = $request;
    }

    public function login(){
        return $this->authService->login();
    }

    public function registrasi(){
        return $this->authService->registrasi();
    }

    public function loginPage(){
        return view('auth.login');
    }

    public function loginPost(){
        $rules= [
            'email' => 'required',
            'password' => 'required'
          ];
      
          $messages= [
              'email.required' => 'Please enter a email.',
              'password.required' => 'Please enter a password.'
          ];

          $validator = Validator::make($this->request->all(),$rules,$messages);
          if($validator->fails())
          {
              $messages=$validator->messages();
              $errors=$messages->all();
      
              return response()->json([
                  'status' => false,
                  'message' => $errors
              ]);
          }
      
          $data = [
              'email' => $this->request->email,
              'password' => $this->request->password
          ];
          
          try {
              if (auth()->attempt($data)) {
                  $user = auth()->user();
                  $token = $user->createToken('token-api')->plainTextToken;
                  
                return redirect()->route('/');
              } else {
                return redirect()->back();
              }
          } catch (\Exception $e) {
              return response()->json([
                  'status' => false,
                  'message' => $e->getMessage()
              ]);
          }
    }

    public function registerPage(){
        return view('auth.registrasi');
    }

    public function logout(){
        $this->request->user()->tokens()->delete();

        // Logout pengguna dari sesi web (untuk otentikasi berbasis sesi)
        auth()->logout();

        // Redirect ke halaman login atau lainnya
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
