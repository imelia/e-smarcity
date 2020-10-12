<?php 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Modelkategori extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    } 

    public function getAllData()
    {
       return $this->db->table('kategori')->get()->getResultArray();
    }
    
    public function tambah($data)
    {
       return $this->db->table('kategori')->insert($data);
    }
}
       