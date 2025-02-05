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

    public function sign_up() {
        return view('admin/sign-up.php');
    }

    public function register_user()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $adminModel = new AdminModel();
            $data = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'mobile_number' => $this->request->getpost('mobile_number'),
            ];

            $adminModel->save($data);

            return redirect()->to('admin/admin_home')->with('success', 'Registration successful! Please log in.');
        }

        // return view('auth/register');
    }
}