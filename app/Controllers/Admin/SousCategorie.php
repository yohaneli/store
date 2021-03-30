<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\SousCategorieModel;

class SousCategorie extends BaseController {

    public $sousCategoriesModel = null ;

   public function __construct() {

       $this->sousCategoriesModel = new SousCategorieModel();

   }

   public function index() {

       $listeSousCategories = $this->sousCategoriesModel->findAll();
       
       $data = [
           'tabSousCategories' => $listeSousCategories,
       ];
       
       echo view('site/common/headerSite',$data);
       echo "<title>Liste des Sous-Catégories - Admin</title>";
       echo "Liste des sous-catégories";
       echo view('admin/souscategorie',$data);
       echo view('site/common/footerSite');

   }
   
}