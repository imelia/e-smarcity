<?php 

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
        $session = session();
        echo "Welcome back, ".$session->get('user_email');
    $data = [
      'judul' => 'Tampilan Admin'
    ];

    echo view('template/v_header', $data);
    echo view('template/v_sidebar');
    echo view('template/v_topbar');
    echo view('home/index');
    echo view('template/v_footer');
  }

  public function dashboard(){		
    echo view('dashboard');
	}
}