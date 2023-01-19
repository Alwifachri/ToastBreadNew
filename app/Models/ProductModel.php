<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['product_name', 'product_price', 'product_desc', 'product_image'];

    public function getProduct($product_id = false)
    {
        if ($product_id == false) {
            return $this->findAll();
        }
        return $this->where(['product_id' => $product_id])->first();
    }
}
