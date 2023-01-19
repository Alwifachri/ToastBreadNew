<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_address'];

    public function getUser($user_id = false)
    {
        if ($user_id == false) {
            return $this->findAll();
        }
        return $this->where(['user_id' => $user_id])->first();
    }
}
