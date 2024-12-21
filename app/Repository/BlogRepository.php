<?php

namespace App\Repository;

use App\Models\Blog;

class BlogRepository {

  protected $model;

  public function __construct(
    Blog $model
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
      $blog = $this->model->where('id', $params['id'])->update($params);
    } else {
      $blog = $this->model->create($params);
    }
    return $blog;
  }

  public function delete($id){
    return $this->model->where('id', $id)->delete();
  }

}