<?php namespace App\Controllers;
 
use CodeIgniter\Controller;

 
class MonCompte extends BaseController {

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

    public function mailTest() {
		
        $email = \Config\Services::email();
    
        $email->setFrom('yohan.elisabeth.p@gmail.com', 'Yohan');
        $email->setTo('yohan.elisabeth@outlook.fr');
        $email->setCC('yohan.elisabeth@outlook.fr');
    
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
    
        $email->send();
    
    
        }
    
}