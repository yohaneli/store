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
       
       echo view('site/common/headerSite');
       echo "<title>Liste des Sous-Catégories - Admin</title>";
       echo view('admin/souscategorie',$data);
       echo view('site/common/footerSite');

   }

   public function deleteSousCategorie($id=null) {

    //fonction qui supprime une sous-catégorie

    $sousCategorie = $this->sousCategoriesModel->where('sous_categorie_id',$id)->first();

    $this->sousCategoriesModel->where('sous_categorie_id',$id)->delete();

    $data = [
        'sousCategorie'  => $sousCategorie
    ];

    return redirect()->to('/admin/souscategorie');

    }

    public function createSousCategorie() {

        //include helper form

        helper(['form']);

        //set rules validation form

        $rules = [
            'name'      => 'required',
        ];
         
        if($this->validate($rules)) {

            $model = new SousCategorieModel();

            $data = [
                'sous_categorie_name'    => $this->request->getVar('name'),
            ];

            $model->save($data);

            return redirect()->to('/admin/souscategorie');

        } else {

            $data['validation'] = $this->validator;

            echo view('site/common/headerSite');
            echo view('admin/souscategorie', $data);
            echo view('site/common/footerSite');
            
        }
         
    }
   
}