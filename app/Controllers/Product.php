<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Product extends BaseController {

    public $categoriesModel = null ;

	public $sousCategoriesModel = null ;

	public $usersModel = null ;

	public $productsModel = null ;

        public function __construct() {

            $this->categoriesModel = new CategorieModel();

            $this->sousCategoriesModel = new SousCategorieModel();

            $this->usersModel = new UserModel();

            $this->productsModel = new ProductModel();

        }

            public function index($id=null) {

                $listeCategories = $this->categoriesModel->findAll();
		
                $listeSousCategories = $this->sousCategoriesModel->findAll();
                
                $listeProducts = $this->productsModel->findAll();

                $produit = $this->productsModel->where('category_id',$id)->first();
        
                $data = [
                    'tabCategories'         => $listeCategories,
                    'tabProducts'	        => $listeProducts,
                    'tabSousCategories'     => $listeSousCategories,
                    'usersModel'            => $this->usersModel,
                    'produit'               =>$produit,
                    'categoriesModel'       => $this->categoriesModel,
                    'sousCategoriesModel'   => $this->sousCategoriesModel
                ];

                echo view('site/common/headerSite');
                echo view('produit',$data);
                echo view('site/common/footerSite');

            }
}