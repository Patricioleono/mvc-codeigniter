<?php 
namespace App\Models;

use CodeIgniter\Model;

//este modelo mapea la base de datos, ejemplo en gradebeer tenia graderbeer y no podia insertar los grados por esto D:
class Cerveza extends Model{
    //tabla de base de datos
    protected $table      = 'beer';
    
    //columnas de la base de datos
    protected $primaryKey = 'id';
    protected $allowedFields = ['namebeer','gradebeer','typebeer'];
}