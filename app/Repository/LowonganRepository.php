<?php

namespace App\Repository;

use App\Models\Lowongan;

class LowonganRepository {

  protected $model;

  public function __construct(
    Lowongan $model
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
    if (!empty($params['id'])) {
      $user = $this->model->where('id', $params['id'])->update($params);
    } else {
      $user = $this->model->create($params);
    }
    return $user;
  }

  public function delete($id){
    return $this->model->where('id', $id)->delete();
  }

}