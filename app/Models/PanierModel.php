<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class PanierModel extends Model {

    protected $table = 'panier';

    protected $allowedFields = ['panier_id ','product_id','user_id','panier_total','panier_date'];

}