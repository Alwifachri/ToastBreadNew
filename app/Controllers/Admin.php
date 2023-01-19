<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    protected $products;
    protected $users;
    public function __construct()
    {
        $this->products = new ProductModel();
        $this->users = new UserModel();
    }
    public function index()
    {
        $data = [
            'product' => $this->products->getProduct(),
            'user' => $this->users->getUser()
        ];
        dd($data);
        helper(['form']);
        return view('admin', $data);;
    }
}
