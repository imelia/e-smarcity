<?php 

namespace App\Controllers;

use App\Models\Modeldashboard;

class Home extends BaseController
{
  protected $Modeldashboard;

  public function __Construct()

  {
    $this->Modeldashboard = new Modeldashboard();
  }


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

  public function dashboard()
  {
    $Home = $this->Modeldashboard->findAll();

    $data = [
      'judul' => 'Dashboard',
      'home' => $Home,
    ];

    echo view('dashboard', $data);
  }
}