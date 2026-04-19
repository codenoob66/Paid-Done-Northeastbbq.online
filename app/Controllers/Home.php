<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        return view('templates/header', [
            'title' => 'Home'
        ])
        . view('home')
        . view('templates/footer');
    }

    public function send()
    {
        $userEmail = $this->request->getPost('email');
        $userMessage = $this->request->getPost('message');

        if (empty($userEmail) || empty($userMessage)) {
            return redirect()->back()->withInput()->with('error', 'Please fill in all fields.');
        }
        
        $email = service('email');
        $email->setFrom('info@northeastbbq.online', 'Website contact form');
        $email->setTo('info@northeastbbq.online', 'rafael');
        $email->setSubject('Email Test');
        $email->setReplyTo($userEmail);
        $email->setMessage($userMessage);
        if($email->send())
            {
                return redirect()->to('/')->with('success', 'Thank you for your inquiry. We will get back to you soon!');
            }
                return "<pre>" . print_r($email->printDebugger(['headers', 'subject', 'body']), true) . "</pre>";
    }

}

        