<?php

namespace App\Service;

use App\Repository\KategoriRepository;
use Illuminate\Http\Request;

class KategoriService {

  protected $kategoriRepository;
  protected $request;

  public function __construct(
    KategoriRepository $kategoriRepository,
    Request $request
  )
  {
    $this->kategoriRepository = $kategoriRepository;
    $this->request = $request;
  }

  public function getAlls(){
    return $this->kategoriRepository->getAll();
  }

  public function getOnes(){
    return $this->kategoriRepository->getAll();
  }

  public function getAll(){
    $data = $this->kategoriRepository->getAll();

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
    $data = $this->kategoriRepository->getOne($id);

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

  public function save(){
    $params = $this->request->only([
      'id',
      'name',
      'description'
    ]);

    if($this->request->file('image')){
      $file = $this->request->file('image');
      $extension = $file->getClientOriginalExtension();
      $name = time() .'.'. $extension;
      $path = $this->request->file('image')->storeAs('kategori', $name, 'public');
    }

    $params['image'] = $path;

    $this->kategoriRepository->save($params);
    
    try {
      return response()->json([
        'status' => true,
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
    $this->kategoriRepository->delete($id);
    try {
      return response()->json([
        'status' => true,
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