<?php 

namespace App\Controllers;

use App\Models\Modeltentang;

class Tentang extends BaseController
{
  protected $Modeltentang;

  public function __Construct()

  {
    $this->Modeltentang = new Modeltentang();
  }

    public function index()
    {
      $Tentang = $this->Modeltentang->findAll();

        $data = [
            'judul' => 'Tampilan User',
            'tentang' => $Tentang
          ];
        
          echo view('templateuser/v_tentang', $data);
    }
    
}
