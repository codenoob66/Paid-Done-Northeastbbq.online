<?php

namespace App\Controllers;

class Contact extends BaseController 
{
    public function index()
    {
        return view('templates/header', [
            'title' => 'Contact Page'
        ])
        . view('contact')
        . view('templates/footer');
    }
}