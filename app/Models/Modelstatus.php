<?php 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Modelstatus extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    } 

    public function getAllData()
    {
       return $this->db->table('status')->get()->getResultArray();
    }
    
    public function tambah($data)
    {
       return $this->db->table('status')->insert($data);
    }
}
       