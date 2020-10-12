<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Modelmodal;

class Modal extends Controller
{
    public function __construct()
    {
        $this->model = new Modelmodal;
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Modal',
            'modal' => $this->model->getAllData()
        ];

        echo view('template/v_header', $data);
        echo view('template/v_sidebar');
        echo view('template/v_topbar');
        echo view('modal/index');
        echo view('template/v_footer');
    } 

    public function tambah()
    {
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'gambar' => $this->request->getPost('gambar')
        ];
         // insert data
        $success = $this->model->tambah($data);
        if ($success) {
            return redirect()->$to(base_url('kategori'));
        }
    }
}
    