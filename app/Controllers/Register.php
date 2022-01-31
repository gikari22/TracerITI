<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserProfileModel;
use App\Models\UserAccountModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nrp'               => 'required|min_length[10]|max_length[10]'
        ];
         
        if($this->validate($rules)){
            date_default_timezone_set("Asia/Jakarta");
            $model = new UserProfileModel();
            $id = $this->request->getPost('nrp');
            $profiledata = [
                'nrp'              => $this->request->getPost('nrp'),
                'nama'             => $this->request->getPost('nama'),
                'program_studi'    => $this->request->getPost('prodi'),
                'tahun_akademik'   => $this->request->getPost('prodi'),
                'alamat'           => $this->request->getPost('alamat'),
                'kode_pos'         => $this->request->getPost('zip'),
                'tanggal_daftar'   => date("Y-m-d H:i:s"),
                'id_acc'           => 
            ];
            $model->insert($profiledata);
            $model2 = new UserAccountModel();
            $userdata = [
                'id_acc'           => 'usr'. $this->request->getPost('nrp'),
                'email'            => $this->request->getPost('email'),
                'password'         => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model2->insert($userdata);

            echo view('login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}