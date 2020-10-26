<?php 

namespace App\Controllers;

use App\Models\SmartModel;

class User extends BaseController
{
    protected $SmartModel;

    public function __Construct()

     {
        $this->SmartModel = new SmartModel();
     }

    public function index()
    {
        $User = $this->SmartModel->findAll();

        $data = [
            'judul' => 'Tampilan User',
            'user' => $User
          ];
        
          echo view('templateuser/v_wrapper', $data);
        }
}
