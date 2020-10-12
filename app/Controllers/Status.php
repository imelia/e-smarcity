<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Modelstatus;

class Status extends Controller
{
    public function __construct()
    {
        $this->model = new Modelstatus;
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Status',
            'status' => $this->model->getAllData()
        ];

        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('status/index');
        echo view('template/v_footer');
    } 

}