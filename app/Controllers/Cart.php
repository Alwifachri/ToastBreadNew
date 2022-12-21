<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cart extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('cart');;
    }
}
