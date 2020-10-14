<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Modelstatus;
 
class Status extends BaseController
{
    public function index()
    {
        $model = new Modelstatus();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['status'] = $model->getStatus();
            return view('v_statuslist',$data);
        }
    }

    public function form(){
        helper('form');
        return view('v_statusform');
    }

    

}