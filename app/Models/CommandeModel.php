<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class CommandeModel extends Model {

    protected $table = 'commande';

    protected $allowedFields = ['commande_id','user_id','commande_total','commande_mode_paiement','etat','commande_date'];

}