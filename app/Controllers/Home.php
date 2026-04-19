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
        
        $email = service('email');
        $email->setFrom('info@northeastbbq.online', 'Website contact form');
        $email->setTo('info@northeastbbq.online', 'rafael');
        $email->setSubject('Email Test');
        $email->setReplyTo($userEmail);
        $email->setMessage($userMessage);
        if($email->send())
            {
                return redirect()->to('/')->with('sucess', 'test message!');
            }
                return "<pre>" . print_r($email->printDebugger(['headers', 'subject', 'body']), true) . "</pre>";
    }

}

        