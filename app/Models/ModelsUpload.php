<?php namespace App\Models;
use CodeIgniter\Model;
 
class ModelsUpload extends Model
{
    protected $table = 'modal';
     
    public function getGambar()
    {
        return $this->findAll();  
    }
    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
 }