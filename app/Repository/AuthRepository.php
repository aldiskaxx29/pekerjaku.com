<?php

namespace App\Repository;

use App\Models\User;

class AuthRepository {

  protected $model;

  public function __construct(
    User $model
  )
  {
    $this->model = $model;
  }

  public function login($params){
    
  }

  public function registrasi($params){
    $params['password'] = bcrypt($params['password']);
    return $this->model->create($params);
  }

  public function update($id, $params) {
    // Find the user by ID
    $user = $this->model->find($id);

    if (!$user) {
        throw new \Exception('User not found.');
    }

    // Update the user's details
    $user->update($params);

    return $user;
}
}