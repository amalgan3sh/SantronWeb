<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['username', 'email', 'password', 'mobile_number', 'created_at'];

    // Automatically hash password before saving
    protected $beforeInsert = ['hashPassword', 'setCreatedAt'];
    
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
        }
        return $data;
    }

    protected function setCreatedAt(array $data)
    {
        $data['data']['created_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    public function userExists($email)
    {
        return $this->where('email', $email)->first();
    }


}
