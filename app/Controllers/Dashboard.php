<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    protected $products;
    public function __construct()
    {
        $this->products = new ProductModel();
    }

    public function index()
    {
        $data = [
            'product' => $this->products->getProduct()
        ];

        helper(['form']);
        // dd($data);
        return view('dashboard', $data);
    }
}
