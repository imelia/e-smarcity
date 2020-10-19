<?php 

namespace App\Models;
 
use CodeIgniter\Model;
 
class SmartModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $useTimestamps = true;

}