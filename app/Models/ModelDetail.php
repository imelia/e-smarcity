<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class ModelDetail extends Model
{
    protected $table = 'download';
    protected $primaryKey = 'id_download';
    protected $useTimestamps = true;

}