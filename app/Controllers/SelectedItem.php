<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SelectedItem extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('selecteditem');;
    }
}
