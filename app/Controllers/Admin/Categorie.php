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
       echo view('admin/categorie',$data);
       echo view('site/common/footerSite');

   }

   public function deleteCategorie($id=null) {

    //fonction qui supprime une catégorie

    $categorie = $this->categoriesModel->where('category_id',$id)->first();

    $this->categoriesModel->where('category_id',$id)->delete();

    $data = [
        'categorie'  => $categorie
    ];

    return redirect()->to('/admin/categorie');

    }

    public function createCategorie() {

        //include helper form

        helper(['form']);

        //set rules validation form

        $rules = [
            'name'      => 'required',
        ];
         
        if($this->validate($rules)) {

            $model = new CategorieModel();

            $data = [
                'category_name'    => $this->request->getVar('name'),
            ];

            $model->save($data);

            return redirect()->to('/admin/categorie');

        } else {

            $data['validation'] = $this->validator;

            echo view('site/common/headerSite');
            echo view('admin/categorie', $data);
            echo view('site/common/footerSite');
            
        }
         
    }

}