<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        return view('templates/header',[
            'title' => 'Our Menu'
        ])
        . view('menu')
        . view('templates/footer');
    }
}