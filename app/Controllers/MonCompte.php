<?php namespace App\Controllers;
 
use CodeIgniter\Controller;

 
class MonCompte extends Controller {

    public function index() {

        $session = session();

        $userMail = $session->get('user_email') ;

        $userName = strstr($userMail,'@',true) ;

        $userName = ucfirst($userName) ;

        $data = [
            'login' => $userName,
        ];
        
        echo view('site/common/headerSite');
		echo "<title>Mon Compte</title>";
        echo view('moncompte',$data);
		echo view('site/common/footerSite');


    }
    
}