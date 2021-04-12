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

		$user = $this->usersModel->where('user_id',$userId)->first();

			if($userId) {

				$panier = $this->paniersModel->where('user_id',$userId)->findAll();

			} else {

				$cookie = $this->request->getCookie('TheCookieName');

				if($cookie) {

					$user = $this->usersModel->where('cookie_key',$cookie)->first();

					$panier = $this->paniersModel->where('user_id',$user['user_id'])->findAll();

				}

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

		$produit = $this->productsModel->where('product_id',$id)->first();

		$produitPrix = 0 ;

		$produitPrix += $produit['price'];

		$users = $this->usersModel->findAll();

		$session = session();

		$userId = $session->get('user_id');

			if (isset($userId)) {

			$elementsPanier = [
				"product_id"	=> $id,
				"user_id"		=> $userId,
				"prix_elem_panier"=> $produitPrix
			];

			$this->paniersModel->save($elementsPanier);

			} 
			
			return redirect()->to('/panier');

	}
	
}