<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Modelkategori;

class Kategori extends Controller
{
 
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->kategori
        $this->kategori = new Modelkategori();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
 
    public function index()
    {
        $data['kategori'] = $this->kategori->getkategori();
        echo view('kategori/index', $data);
    } 

    public function create()
    {
    return view('create');
    } 

    public function store()
    {
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('nama_kategori');
    $gmbr = $this->request->getPost('gambar');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'nama_kategori' => $name,
        'gambar' => $gmbr
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
    $simpan = $this->kategori->insert_kategori($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created category successfully');
        // Redirect halaman ke product
        return redirect()->to(base_url('kategori')); 
    } 
    } 
}