<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Transaction extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('transaction');;
    }
}
