<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CategorieModel extends Model{
    protected $table = 'categories';
    protected $allowedFields = ['category_id','category_name','category_date'];
}