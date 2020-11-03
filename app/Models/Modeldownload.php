<?php namespace App\Models;
use CodeIgniter\Model;
 
class Modeldownload extends Model
{
    protected $table = 'download';
     
    public function getDownload()
    {
        return $this->findAll();  
    }
    public function SimpanDownload($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function PilihDownload($id)
    {
         $query = $this->getWhere(['id_download' => $id]);
         return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id_download' => $id));
        return $query;
    }
    public function HapusDownload($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_download' => $id));
        return $query;
    }
 }