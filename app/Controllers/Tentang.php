<?php 

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Tampilan User',
          ];
        
          echo view('templateuser/v_tentang', $data);
        }
}
