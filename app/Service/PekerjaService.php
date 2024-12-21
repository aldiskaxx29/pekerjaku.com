<?php

namespace App\Service;

use App\Repository\PekerjaRepository;
use Illuminate\Http\Request;

class PekerjaService {
  protected $pekerjaRepository;
  protected $request;

  public function __construct(
    PekerjaRepository $pekerjaRepository,
    Request $request
  )
  {
    $this->pekerjaRepository = $pekerjaRepository;
    $this->request = $request;
  }

  public function getALls(){
    return $this->pekerjaRepository->getAll();
  }

  public function getOnes($id){
    return $this->pekerjaRepository->getOne($id);
  }

  public function getAll(){
    $data = $this->pekerjaRepository->getAll();

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

    $data = $this->pekerjaRepository->getOne($id);
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
      'user_id',
      'kategori_id',
      'age',
      'experience',
      'education',
      'tall',
      'heavy',
      'date_of_birth',
      'tribe_of_origin',
      'police_letter',
      'doctors_letter',
      'marital_status',
      'salary',
      'admin_fees',
      'warranty_period',
      'stay_at',
      'have_children',
      'religion',
      'current_location',
      'fear_of_dogs',
      'work_experience_abroad',
      'english',
      'skills',
      'willing_to_work_in',
      'employee_status',
      'skill'
    ]);

    $this->pekerjaRepository->save($params);
    try {
      return response()->json([
        'status' => true,
        'message' => 'Data berhasil di tambahkan'
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
    $this->pekerjaRepository->delete($id);

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