<?php

namespace App\Service;

use App\Repository\BlogRepository;
use Illuminate\Http\Request;

class BlogService {

  protected $blogRepository;
  protected $request;

  public function __construct(
    BlogRepository $blogRepository,
    Request $request
  )
  {
    $this->blogRepository = $blogRepository;
    $this->request = $request;
  }

  public function getAlls(){
    return $this->blogRepository->getAll();
  }

  public function getOnes(){
    $id = $this->request->input('id');
    return $this->blogRepository->getOne($id);
  }

  public function getAll(){
    $data = $this->blogRepository->getAll();
    try {
      return response()->json([
        'status' => true,
        'data' => $data
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'status' => false,
        'message' => $e->getMessage()
      ]);
    }
  }

  public function getOne(){
    $id = $this->request->input('id');
    $data = $this->blogRepository->getOne($id);
    try {
      return response()->json([
        'status' => false,
        'data' => $data
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'status' => false,
        'message' => $e->getMessage()
      ]);
    }
  }

  public function save(){
    $params = $this->request->only([
      'id',
      'title',
      'sub_title',
      'description',
      'date_',
    ]);

    $this->blogRepository->save($params);

    try {
      return response()->json([
        'status' => false,
        'message' => 'Data berhasil di simpan'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'status' => false,
        'message' => $e->getMessage()
      ]);
    }
  }

  public function delete(){
    $id = $this->request->input('id');
    $this->blogRepository->delete($id);

    try {
      return response()->json([
        'status' => false,
        'message' => 'Data berhasil di hapus'
      ]);
    } catch (\Exception $e) {
      return response()->json([
        'status' => false,
        'message' => $e->getMessage()
      ]);
    }    
  }
}