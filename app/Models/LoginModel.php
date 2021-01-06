<?php namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = 'login';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_name', 'user_email', 'user_password'];


    protected $useTimestamps = true;
   protected $createdField = 'user_created_at';
   protected $updatedField = 'user_updated_at';
}
