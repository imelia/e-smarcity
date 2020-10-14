<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Modelstatus;
 
class Status extends Controller
{
    public function __construct() {
        $this->status = new Modelstatus();
    }
    public function index()
    {
        $data['status'] = $this->status->getStatus();
        echo view('status/index', $data);
    }
    public function create()
    {
        return view('status/create');
    }
    public function store()
    {
        // Mengambil value dari form dengan method POST
        $jen = $this->request->getPost('jenis_status');
        $lev = $this->request->getPost('level_status');
        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
           'jenis_status' => $jen,
           'level_status' => $lev
       ];
       $simpan = $this->status->insert_status($data);

       // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created status successfully');
        // Redirect halaman ke status
        return redirect()->to(base_url('status')); 
    }
    }
    public function edit($id)
    {
    // Memanggil function getStatus($id) dengan parameter $id di dalam Modelstatus dan menampungnya di variabel array status
    $data['status'] = $this->status->getStatus($id);
    // Mengirim data ke dalam view
    return view('status/edit', $data);
    } 

    public function update($id)
    {
    // Mengambil value dari form dengan method POST
    $jen = $this->request->getPost('jenis_status');
    $lev = $this->request->getPost('level_status');
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
       'jenis_status' => $jen,
       'level_status' => $lev
   ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_status dan membawa parameter data beserta id
    */
    $ubah = $this->status->update_status($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated status successfully');
        // Redirect ke halaman status
        return redirect()->to(base_url('status')); 
    }
    } 

    public function delete($id)
{
    // Memanggil function delete_status() dengan parameter $id di dalam Modelstatus dan menampungnya di variabel hapus
    $hapus = $this->status->delete_status($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
    {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted status successfully');
        // Redirect ke halaman status
        return redirect()->to(base_url('status'));
    }
} 
}