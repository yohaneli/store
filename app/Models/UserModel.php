<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_id','user_email','user_password','cookie_key','user_role','user_created_at'];
}