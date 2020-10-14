<?php 

namespace App\Controllers;

class Homefront extends BaseController
{
  public function index()
  {
    $data = [
      'judul' => 'Homepage'
    ];

    echo view('layout/v_wrapper', $data);

  }
}