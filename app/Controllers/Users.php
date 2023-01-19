<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    protected $users;
    public function __construct()
    {
        $this->users = new UserModel();
    }
    public function index()
    {
        $user = $this->users->findAll();
        $data = [
            'user' => $user
        ];

        helper(['form']);
        return view('users', $data);;
    }
}
