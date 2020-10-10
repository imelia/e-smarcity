<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelkategori;

class Kategori extends BaseController
{ 
    protected $Modelkategori;

    public function __construct()
    {
        $this->Modelkategori = new Modelkategori();
    }

    public function index()
    {
      $data =[
        'title' => 'List Data Kategori',
        'kategori' => $this->Modelkategori->get_kategori(),
        'content' => 'Views\v_kategori',
      ];
      var_dump($data);
      echo view('layout/v_wrapper', $data);
    }
}
