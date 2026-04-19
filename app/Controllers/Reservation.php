<?php

namespace App\Controllers;

class Reservation extends BaseController
{
    public function index()
    {
        return view('templates/header',[
            'title' => 'Reservations Page'
        ])
        . view('reservation')
        . view('templates/footer');
    }
}