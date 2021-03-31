<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class AdminHome extends BaseController {

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
		echo "<title>Accueil Admin</title>";
		echo "Accueil Admin";
		echo view('admin/homeAdmin.php',$data);
		echo view('site/common/footerSite');

	}

	

	public function deleteProduct($id=null) {

		//fonction qui supprime un produit
	
		$product = $this->productsModel->where('product_id',$id)->first();
	
		$this->productsModel->where('product_id',$id)->delete();
	
		return redirect()->to('/admin/adminhome');
		
		$data = [
			'product'  => $product
		];

	}
	
}
