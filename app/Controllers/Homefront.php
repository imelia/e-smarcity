<?php 

namespace App\Controllers;

use App\Models\SmartModel;

class Homefront extends BaseController
{

  protected $SmartModel;

  public function __Construct()

  {
    $this->SmartModel = new SmartModel();
  }

  public function index()
  {
    
   $Homefront = $this->SmartModel->findAll();

    $data = [
      'judul' => 'Tampilan User',
      'homefront' => $Homefront
    ];
  
    echo view('layout/v_wrapper', $data);

  }
}