<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserProfileModel extends Model{
    protected $table = 'users_profile';
    protected $allowedFields = ['nrp','nama','program_studi','tahun_akademik','alamat','kode_pos','tanggal_daftar','id_user'];
}

?>