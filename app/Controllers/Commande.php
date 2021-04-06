<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Commande extends BaseController {

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

	public function index() {

		$listeCategories = $this->categoriesModel->findAll();
		
		$listeSousCategories = $this->sousCategoriesModel->findAll();
		
		$listeProducts = $this->productsModel->findAll();

		$data = [
			'tabCategories' => $listeCategories,
			'tabProducts'	=> $listeProducts,
			'tabSousCategories' => $listeSousCategories,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
			'sousCategoriesModel' => $this->sousCategoriesModel,

		];

		echo view('site/common/headerSite');
		echo view('site/commande',$data);
		echo view('site/common/footerSite');

	}
	
}