<?php

namespace App\Models;

use CodeIgniter\Model;

class InquiryModel extends Model
{
    protected $table      = 'inquiry';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'phone', 'website', 'message'];
    protected $useTimestamps = true;
}