<?php 
namespace App\Models;

use CodeIgniter\Model;

class Games extends Model{
    protected $table      = 'videojuegos';

    protected $primaryKey = 'id';
    protected $allowedFields = ['ngame','tgame','dgame'];
    
}