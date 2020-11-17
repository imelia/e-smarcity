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

        function file(){
          $request = \Config\Services::request();
          $request->uri->getSegment(4);
          $pat ='public/assets/img/file/';
          $data = file_get_contents($pat);
          force_download($request, $data);
      }

      public function download($id){
        helper('download');
        $model = new Modeltentang();
        $dt = $model->download($id)->getRow();
        $file = 'public/assets/img/file/'.$dt[''];
        force_download($file);
    }
}
