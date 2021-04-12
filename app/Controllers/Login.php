<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Login extends BaseController {

    public function index() {

        helper(['form']);

        echo view('site/common/headerSite');
		echo view('loginRegister');
		echo view('site/common/footerSite');

    } 
 
    public function auth() {

        $session = session();

        $model = new UserModel();

        $email = $this->request->getVar('email');

        $password = $this->request->getVar('password');

        $data = $model->where('user_email', $email)->first();

        if($data) {

            $pass = $data['user_password'];

            $verify_pass = password_verify($password, $pass);

                if($verify_pass) {

                    $ses_data = [
                        'user_id'       => $data['user_id'],
                        'user_email'    => $data['user_email'],
                        'logged_in'     => TRUE,
                    ];

                    $session->set($ses_data);

                    //dd($ses_data);

                    if (empty($data['cookie_key'])) {

                    $cookie = [
                        'name'   => 'TheCookieName',
                        'value'  => sha1(md5(microtime(true).mt_rand(1000,9000))),
                        'expire' => '86500'
                    ];
                
                    $this->response->setCookie($cookie)->send();

                    $userCookie = $this->response->getCookie('TheCookieName');

                    $dataCookie =[
                        'cookie_key'    => $userCookie['value']
                    ];


                            $model->where('user_id',$data['user_id'])->set($dataCookie)->update();

                        } else {
                            
                            $cookie = [
                                'name'   => 'TheCookieName',
                                'value'  => $data['cookie_key'],
                                'expire' => '86500'
                            ];

                            $this->response->setCookie($cookie)->send();


                        }

                    return redirect()->to('/moncompte');

                } else {

                    $session->setFlashdata('msg', 'Erreur au niveau du mot de passe');

                    return redirect()->to('/login');

                }

        } else {

            $session->setFlashdata('msg', "Erreur au niveau de l'adresse mail");

            return redirect()->to('/login');

        }

    }
 
    public function logout() {

        $session = session();

        $session->destroy();

        return redirect()->to('/login');

    }

} 