<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function collection()
    {
        return view('collection');
    }
}
