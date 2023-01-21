<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    protected $allowedFields = ['invoice_no', 'transaction_date', 'user_id', 'product_id', 'qty', 'grand_total'];

    public function getOrder($transaction_id = false)
    {
        if ($transaction_id == false) {
            return $this->findAll();
        }
        return $this->where(['transaction_id' => $transaction_id])->first();
    }
}
