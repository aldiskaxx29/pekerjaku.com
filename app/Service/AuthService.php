<?php

namespace App\Service;

use App\Repository\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthService {
  protected $authRepository;
  protected $request;

  public function __construct(
    Request $request,
    AuthRepository $authRepository
  )
  {
    $this->authRepository = $authRepository;
    $this->request = $request;
  }

  public function login(){
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
            return response()->json([
                'status' => true,
                'data' => $user,
                'access_token' => $token
            ]);   
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Username / Password salah'
            ]);
        }
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ]);
    }
  }

  public function registrasi(){
    $params = $this->request->only([
      'first_name',
      'last_name',
      'email',
      'password',
      'address',
      'district',
      'regency_city',
      'province',
      'postal_code',
      'phone_number',
      'number_whatsapp',
      'level_user',
    ]);

    if($this->request->file('image')){
      $file = $this->request->file('image');
      $extension = $file->getClientOriginalExtension();
      $name = time() .'.'. $extension;
      $path = $this->request->file('image')->storeAs('images', $name, 'public');
    }

    $params['image'] = $path;

    $this->authRepository->registrasi($params);

    try {
      return response()->json([
        'status' => true,
        'message' => 'Account berhasil di daftarkan'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'status' => false,
        'message' => $e
      ]);
    }
  }
}