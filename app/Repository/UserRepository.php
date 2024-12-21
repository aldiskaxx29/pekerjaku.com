<?php

namespace App\Repository;

use App\Models\User;

class UserRepository {

  protected $model;

  public function __construct(
    User $model
  )
  {
    $this->model = $model;
  }

  public function getAll(){
    return $this->model->get();
  }

  public function getOne($id){
    return $this->model->where('id', $id)->first();
  }

  public function save($params){
    if ($params['id'] != '') {
      $user = $this->model->where('id', $params['id'])->update([
        'first_name' => $params['first_name'],
        'last_name' => $params['last_name'],
        'email' => $params['email'],
        'password' => $params['password'],
        'address' => $params['address'],
        'district' => $params['district'],
        'regency_city' => $params['regency_city'],
        'province' => $params['province'],
        'postal_code' => $params['postal_code'],
        'phone_number' => $params['phone_number'],
        'number_whatsapp' => $params['number_whatsapp'],
        'image' => $params['image'],
        'level_user' => $params['level_user']
      ]);
    } else{
      $user = $this->model->create($params);
    }
    return $user;
  }

  public function delete($id){
    return $this->model->where('id', $id)->delete();
  }
}