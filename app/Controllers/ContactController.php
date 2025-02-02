<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function submit()
    {
        $logger = service('logger'); // Load Logger Service
        $request = service('request');
    
        $logger->info("submit() method reached.", ['method' => $request->getMethod()]);
    
        try {
            // Retrieve form data
            $data = [
                'name'     => $request->getPost('name'),
                'email'    => $request->getPost('email'),
                'location' => $request->getPost('location'),
                'message'  => $request->getPost('message'),
            ];
    
            $logger->info("Form data received: " . json_encode($data));
    
            // Insert data into the database
            $contactModel = new ContactModel();
            if ($contactModel->insert($data)) {
                $logger->info("Data inserted successfully into the database.");
                return redirect()->to('/contact_us')->with('success', 'Message sent successfully.');
            } else {
                $logger->error("Database insertion failed: " . json_encode($contactModel->errors()));
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        } catch (\Exception $e) {
            $logger->error("Exception occurred: " . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}