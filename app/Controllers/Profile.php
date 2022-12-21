<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('profile');;
    }
}
