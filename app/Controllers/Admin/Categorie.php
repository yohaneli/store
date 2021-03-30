<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CategorieModel;

class Categorie extends BaseController {

    public $categoriesModel = null ;

   public function __construct() {

       $this->categoriesModel = new CategorieModel();

   }

   public function index() {

       $listeCategories = $this->categoriesModel->findAll();
       
       $data = [
           'tabCategories' => $listeCategories,
       ];
       
       echo view('site/common/headerSite',$data);
       echo "<title>Liste des Catégories - Admin</title>";
       echo "Liste des catégories";
       echo view('admin/categorie',$data);
       echo view('site/common/footerSite');

   }
   
}