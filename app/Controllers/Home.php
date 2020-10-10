<?php 
namespace App\Controllers;
use App\Models\Modelkategori;


class Home extends BaseController
{
  protected $Modelkategori;

    public function __construct()
    {
        $this->Modelkategori = new Modelkategori();
    }
  public function index()
  {
    $data =[
      'title' => 'Home',
      'kategori' => $this->Modelkategori->get_kategori(),
      'content' => 'v_home',
    ];
    echo view('layout/v_wrapper', $data);
  }

  public function kategori()
  {
    $data =[
      'title' => 'Kategori',
      'content' => 'v_kategori',
    ];
    echo view('layout/v_wrapper_kategori', $data);
  }

  public function status()
  {
    $data =[
      'title' => 'Status',
      'content' => 'v_status',
    ];
    echo view('layout/v_wrapper_status', $data);
  }
  public function modal()
  {
    $data =[
      'title' => 'Modal',
      'content' => 'v_modal',
    ];
    echo view('layout/v_wrapper_modal', $data);
  }

  //--------------------------------------------------------------------

}