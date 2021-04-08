<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\PanierModel;

class Panier extends BaseController {

	public $categoriesModel = null ;

	public $sousCategoriesModel = null ;

	public $usersModel = null ;

	public $productsModel = null ;

	public $paniersModel = null ;

		public function __construct() {

			$this->categoriesModel = new CategorieModel();

			$this->sousCategoriesModel = new SousCategorieModel();

			$this->usersModel = new UserModel();

			$this->productsModel = new ProductModel();

			$this->paniersModel = new PanierModel();

		}

	public function index() {

		$listeCategories = $this->categoriesModel->findAll();
		
		$listeSousCategories = $this->sousCategoriesModel->findAll();
		
		$listeProducts = $this->productsModel->findAll();

		$session = session();

		$userId = $session->get('user_id') ;

			if (isset($userId)) {

				$panier = $this->paniersModel->where('user_id',$userId)->findAll();

			}

		$data = [
			'tabCategories'		 => $listeCategories,
			'tabProducts'		 => $listeProducts,
			'tabSousCategories'  => $listeSousCategories,
			'usersModel' 		 => $this->usersModel,
			'tabPaniers' 		 => $panier,
			'productsModel' 	 => $this->productsModel,

		];

		echo view('site/common/headerSite');
		echo view('site/panier',$data);
		echo view('site/common/footerSite');

	}

	public function createPanier($id=null) {

		$paniers = $this->paniersModel->findAll();

		$produits = $this->productsModel->findAll();

		$users = $this->usersModel->findAll();

		$session = session();

		$userId = $session->get('user_id');

			if (isset($userId)) {

			$elementsPanier = [
				"product_id"	=> $id,
				"user_id"		=> $userId
			];

			$this->paniersModel->save($elementsPanier);

			} 
			
			return redirect()->to('/panier');

	}
	
}