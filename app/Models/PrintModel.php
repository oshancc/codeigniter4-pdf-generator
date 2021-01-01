<?php namespace App\Models;
use CodeIgniter\Model;

class PrintModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'contact', 'description'];

    public function search($keyword){
    //    $builder = $this->table('user');
    //    $builder->like('name', $keyword);
    //    return $builder;  

        return $this->table('user')->like('name', $keyword)->orLike('email', $keyword);

    }

    //protected $useTimestamps = true;
   // protected $createdField = 'post_created_at';
   // protected $updatedField = 'post_updated_at';
}
