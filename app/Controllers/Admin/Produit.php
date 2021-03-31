<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\CategorieModel;
use App\Models\SousCategorieModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Produit extends BaseController {

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
        echo "<title>Créer un produit</title>";
        echo view('admin/addproduct',$data);
        echo view('site/common/footerSite');

    }

    public function createProduct() {


    //include helper form

    helper(['form']);

    //set rules validation form

    $rules = [
        'name'      	=> 'required|min_length[3]|max_length[30]',
        'souscategorie' => 'required',
        'categorie'     => 'required',
        'description'   => 'required|min_length[3]|max_length[60]',
        'price'      	=> 'required'
    ];

        if($this->validate($rules)) {

            $model = new ProductModel();

            $data = [
                'product_name'    => $this->request->getVar('name'),
                'sous_categorie_id'    => $this->request->getVar('souscategorie'),
                'category_id '    => $this->request->getVar('categorie'),
                'product_desc'    => $this->request->getVar('description'),
                'price'    => $this->request->getVar('price'),
                'product_image'    => $this->request->getVar('photo'),
            ];

            $model->save($data);

            return redirect()->to('/admin/adminhome');

        } else {

            $data['validation'] = $this->validator;

            echo view('site/common/headerSite');
            echo "<title>Créer un produit</title>";
            echo view('admin/addproduct',$data);
            echo view('site/common/footerSite');

        }

    }

}