<?php 
namespace App\Models;
use CodeIgniter\Model;

class Modelkategori extends Model
{
    public function __contruct()
    {
        $db = \Config\Database::connect();
    }
   public function get_kategori() 
    {
        $builder = $db->table('kategori');
        $query   = $builder->get();
        return $query->getResult();
    }
}