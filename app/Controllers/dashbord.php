<?php

namespace App\Controllers;

class dashbord extends BaseController
{
    public function index()
    {
        return view('Dashbord/dashbord');
    }
}