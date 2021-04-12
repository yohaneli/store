<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\Models\PanierModel;
use App\Models\CommandeModel;

class Commande extends BaseController {

	public $categoriesModel = null ;

	public $sousCategoriesModel = null ;

	public $usersModel = null ;

	public $productsModel = null ;

	public $paniersModel = null ;

	public $commandesModel = null ;

		public function __construct() {

			$this->categoriesModel = new CategorieModel();

			$this->sousCategoriesModel = new SousCategorieModel();

			$this->usersModel = new UserModel();

			$this->productsModel = new ProductModel();

			$this->paniersModel = new PanierModel();

			$this->commandesModel = new CommandeModel();

		}

	public function index() {

		$listeCategories = $this->categoriesModel->findAll();
		
		$listeSousCategories = $this->sousCategoriesModel->findAll();
		
		$listeProducts = $this->productsModel->findAll();

		$session = session();

		$userId = $session->get('user_id') ;

			if (isset($userId)) {

				$commande = $this->commandesModel->where('user_id',$userId)->first();

			}


		$data = [
			'tabCategories' => $listeCategories,
			'tabProducts'	=> $listeProducts,
			'tabSousCategories' => $listeSousCategories,
			'usersModel' => $this->usersModel,
			'categoriesModel' => $this->categoriesModel,
			'tabCommandes' 		 => $commande,
			'sousCategoriesModel' => $this->sousCategoriesModel,

		];

		echo view('site/common/headerSite');
		echo view('site/commande',$data);
		echo view('site/common/footerSite');

	}

	public function createCommande() {

		$listeCategories = $this->categoriesModel->findAll();
		
		$listeSousCategories = $this->sousCategoriesModel->findAll();
		
		$listeProducts = $this->productsModel->findAll();

		$commande = $this->commandesModel->findAll();
		
		$paniers = $this->paniersModel->findAll();

		$users = $this->usersModel->findAll();

		$session = session();

		$userId = $session->get('user_id');

		$panier = $this->paniersModel->where('user_id',$userId)->findAll();

		var_dump($panier);

		$prixTotal = 0;

			foreach($panier as $product) {

				$prixTotal = $prixTotal+$product['prix_elem_panier'];

			}

		echo $prixTotal;

				if (isset($userId)) {

				$elementsCommande = [
					"user_id"		=> $userId,
					"commande_total"=> $prixTotal,
					"etat"			=> 'Validee',
				];

				$this->commandesModel->save($elementsCommande);

				$idCommande = $this->commandesModel->getInsertId();

				$dataUpdateCommande = [
					"commande_id"		=> $idCommande
				];

				$this->paniersModel->where('user_id',$userId)->where('commande_id',0)->set($dataUpdateCommande)->update();

				}
				
			

			$data = [
				'tabCategories' 		 => $listeCategories,
				'tabProducts'			 => $listeProducts,
				'tabSousCategories' 	 => $listeSousCategories,
				'usersModel' 			 => $this->usersModel,
				'categoriesModel'		 => $this->categoriesModel,
				'sousCategoriesModel'	 => $this->sousCategoriesModel,
				'panierComplet'			 => $panier	
			];
			
			return redirect()->to('/Commande/index');
	}
	
}