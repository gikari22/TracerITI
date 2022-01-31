<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserAccountModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserAccountModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');
        $data = $model->where('email', $email)->First();
        if($data){
            $pass = $data['password'];
            $role = $data['role'];
            $verify_pass = password_verify($password, $pass);
            if ($role == 'Admin') {
                if($verify_pass){
                    $ses_data = [
                        'id_acc'        => $data['id_acc'],
                        'user_email'    => $data['email'],
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard');
                }else{
                    $session->setFlashdata('msg', 'Wrong Password');
                }
            }
            else{
                if($verify_pass){
                    $ses_data = [
                        'id_acc'        => $data['id_acc'],
                        'user_email'    => $data['email'],
                        'logged_in'     => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/homepageUser');
                }else{
                    $session->setFlashdata('msg', 'Wrong Password');
                    return redirect()->to('/login');
                }
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 