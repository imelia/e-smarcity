<?php namespace App\Models;
use CodeIgniter\Model;
 
class Modelstatus extends Model
{
    protected $table = 'status';
     
    public function getStatus($id = false)
    {
        if($id === false){
            return $this->table('status')
                        ->get()
                        ->getResultArray();
        } else{
            return $this->table('status')
                        ->where('id_status', $id)
                        ->get()
                        ->getRowArray();
        }
    }
    public function insert_status($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_status($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['id_status' => $id]);
    }
   
    public function delete_status($id)
    {
    return $this->db->table($this->table)->delete(['id_status' => $id]);
    }
 }