<?php 

namespace App\Models;

use CodeIgniter\Model;
 
class Modeltentang extends Model
{
    protected $table = 'download';
    protected $primaryKey = 'id_download';
    protected $useTimestamps = true;
    
    public function download($id){
        $query = $this->getWhere(['id_download' => $id]);
         return $query;
       }
}
?>