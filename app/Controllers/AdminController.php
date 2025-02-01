<?php

namespace App\Controllers;
use Config\Database;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/admin_login');
    }

    public function test_db() {
        $db = Database::connect();
        if ($db->connect()) {
            return "Database connected successfully!";
        } else {
            return "Database connection failed!";
        }
    }
}