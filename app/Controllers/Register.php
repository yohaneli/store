<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller{ 

    public function index() {

        helper(['form']);

        $data = [];

        echo view('site/common/headerSite');
        echo view('loginRegister', $data);
        echo view('site/common/footerSite');

    }
 
    public function save() {

        //include helper form

        helper(['form']);

        //set rules validation form

        $rules = [
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
        ];
         
        if($this->validate($rules)) {

            $model = new UserModel();

            $data = [
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $model->save($data);

            return redirect()->to('/register');

        } else {

            $data['validation'] = $this->validator;

            echo view('site/common/headerSite');
            echo view('register', $data);
            echo view('site/common/footerSite');
            
        }
         
    }
 
}