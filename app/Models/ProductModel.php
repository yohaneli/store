<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model{
    protected $table = 'products';
    protected $allowedFields = ['product_id','product_name','sous_categorie_id','category_id','product_desc','price','product_image','product_date'];
}