<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Modelkategori extends Model
{
    protected $table = 'kategori';
 
    public function getkategori($id = false)
    {
        if($id === false){
            return $this->table('kategori')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kategori')
                        ->where('id_kategori', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function simpankategori($data){
        $query = $this->db->table('kategori')->insert($data);
        return $query;
    }
    

    public function insert_kategori($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

} 
