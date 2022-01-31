<?php namespace App\Models;
 
use CodeIgniter\Model;

class UserAccountModel extends Model{
    protected $table = 'users_account';
    protected $allowedFields = ['id_acc','email','password','last_login','logged_in'];
}

?>