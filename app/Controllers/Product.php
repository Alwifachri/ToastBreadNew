<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Product extends Controller
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
        return view('product', $data);;
    }

    public function detail($product_id)
    {
        $data = [
            'product' => $this->products->getProduct($product_id)
        ];
        // if data not found
        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Not Found');
        }
        //if data found
        return view('editproduct', $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'productName' => 'required|is_unique[product.product_name]|min_length[3]|max_length[20]',
            'productPrice' => 'required|min_length[3]|max_length[20]',
            'productDesc' => 'required|min_length[3]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/product/create')->withInput()->with('validation', $validation);
            // dd($validation);
            // return redirect()->to('/product/create');
        }

        $this->products->save([
            'product_name' => $this->request->getVar('productName'),
            'product_price' => $this->request->getVar('productPrice'),
            'product_desc' => $this->request->getVar('productDesc'),
            'product_image' => $this->request->getVar('productImage')
        ]);
        session()->setFlashdata('message', 'Data berhasil ditambahkan');
        return redirect()->to('/product');
    }

    public function delete($product_id)
    {
        $this->products->delete($product_id);
        session()->setFlashdata('message', 'Data berhasil dihapus');
        return redirect()->to('/product');
    }

    public function edit($product_id)
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'product' => $this->products->getProduct($product_id)
        ];
        return view('editproduct', $data);
    }

    public function update($product_id)
    {
        $this->products->save([
            'product_id' => $product_id,
            'product_name' => $this->request->getVar('productName'),
            'product_price' => $this->request->getVar('productPrice'),
            'product_desc' => $this->request->getVar('productDesc'),
            'product_image' => $this->request->getVar('productImage')
        ]);
        session()->setFlashdata('message', 'Data berhasil diubah');
        return redirect()->to('/product');
    }
}
