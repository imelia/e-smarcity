<?php

namespace App\Controllers;

use App\Models\ModelDetail;

class Users extends BaseController
{
    protected $ModelDetail;

    public function __Construct()

     {
        $this->ModelDetail = new ModelDetail();
     }

    public function index()
    {
        $User = $this->ModelDetail->findAll();

        $data = [
            'judul' => 'Tampilan User',
            'user' => $User
        ];

        echo view('templateuser/v_tentang', $data);

    }
    
    public function search(){
      $keyword = $this->request->getPost('keyword');
      $User = $this->ModelDetail->like("judul_download",$keyword,"both")->find();

      // die(var_dump($User));

      $data = [
          'judul' => 'Tampilan User',
          'user' => $User
      ];

      echo view('templateuser/v_wrapper', $data);
    }

    public function detail(){
      $uri = service('uri');
      $id = $uri->getSegment(3);
      // die(var_dump($id));
      $User = $this->ModelDetail->where("id_download",$id)->find();

      // die(var_dump($User));

      $data = [
          'judul' => 'Tampilan User',
          'user' => $User
      ];

      echo view('templateuser/v_content2', $data);
    }

}
