<?php 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Modelmodal extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    } 

    public function getAllData()
    {
       return $this->db->table('modal')->get()->getResultArray();
    }
    
    public function tambah($data)
    {
       return $this->db->table('modal')->insert($data);
    }
}
       