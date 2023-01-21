<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Shop extends Controller
{
    protected $products;
    protected $users;
    protected $session;
    public function __construct()
    {
        $this->products = new ProductModel();
        $this->users = new UserModel();
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'product' => $this->products->getProduct(),
            'session' => $this->session->get()
        ];
        // dd($session->get('user_name'));
        // dd($data);
        // echo "Welcome back, " . $session->get('user_name');
        helper(['form']);
        echo view('shop', $data);;
    }

    public function selected($product_id)
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'product' => $this->products->getProduct($product_id)
        ];
        return view('selecteditem', $data);
    }

    public function orderitem($transaction_id, $product_id, $user_id)
    {
        $date = array('created_on' => date('Y-m-d H:i:s'));
        $this->products->save([
            'transaction_id' => $transaction_id,
            'invoice_no' => $this->request->getVar('invoice'),
            'transaction_date' => $date,
            'user_id' => $user_id,
            'product_id' => $product_id,
            'qty' => $this->request->getVar('qty'),
            'grand_total' => $this->request->getVar('grandtotal')
        ]);
        session()->setFlashdata('message', 'Data berhasil diubah');
        return redirect()->to('/product');
    }

    public function editprofile($user_id)
    {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'users' => $this->users->getUser($user_id)
        ];
        dd($data);
        return view('profile', $data);
    }
}
