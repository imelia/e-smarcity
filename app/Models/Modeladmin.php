<?php namespace App\Models;
use CodeIgniter\Model;
 
class Modeladmin extends Model
{
    protected $table = 'login';
     
    public function getAdmin($id = false)
    {
        if($id === false){
            return $this->table('login')
                        ->get()
                        ->getResultArray();
        } else{
            return $this->table('login')
                        ->where('user_id', $id)
                        ->get()
                        ->getRowArray();
        }
    }
    public function insert_admin($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function update_admin($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['user_id' => $id]);
    }
   
    public function delete_admin($id)
    {
    return $this->db->table($this->table)->delete(['user_id' => $id]);
    }
 }