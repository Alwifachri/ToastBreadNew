<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class Orders extends Controller
{
    protected $orders;
    protected $products;
    public function __construct()
    {
        $this->orders = new OrderModel();
        $this->products = new ProductModel();
    }

    public function index()
    {

        $data = [
            'product' => $this->products->getProduct(),
            'order' => $this->orders->getOrder(),
        ];
        // dd($query);
        helper(['form']);
        return view('orders', $data);
    }
}
