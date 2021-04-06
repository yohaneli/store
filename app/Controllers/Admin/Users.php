<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController {

	 public $usersModel = null ;

	public function __construct() {

		$this->usersModel = new UserModel();

	}

	public function index() {

        $listeUsers = $this->usersModel->findAll();

		$data = [
			'tabUsers' => $listeUsers
		];
		
		echo view('admin/common/headerAdmin');
		echo "<title>Liste des utilisateurs</title>";
		echo view('admin/users',$data);
		echo view('admin/common/footerAdmin');

	}
	
}
