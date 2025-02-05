<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;
use App\Models\InquiryModel;


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

    public function submit_inquiry()
    {
        $logger = service('logger'); // Load Logger Service
        $request = service('request');

        $logger->info("submit() method reached.", ['method' => $request->getMethod()]);

        try {
            // Retrieve form data
            $data = [
                'name'     => $request->getPost('name'),
                'email'    => $request->getPost('email'),
                'phone'    => $request->getPost('phone'),
                'website'  => $request->getPost('website'),
                'message'  => $request->getPost('message'),
            ];

            $logger->info("Form data received: " . json_encode($data));

            // Insert data into the inquiry table
            $inquiryModel = new InquiryModel();
            if ($inquiryModel->insert($data)) {
                $logger->info("Data inserted successfully into the inquiry table.");
                return redirect()->to('/contact_us')->with('success', 'Message sent successfully.');
            } else {
                $logger->error("Database insertion failed: " . json_encode($inquiryModel->errors()));
                return redirect()->back()->with('error', 'Failed to save data.');
            }
        } catch (\Exception $e) {
            $logger->error("Exception occurred: " . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }
}