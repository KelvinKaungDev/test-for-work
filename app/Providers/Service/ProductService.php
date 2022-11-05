<?php

namespace App\Providers\Service;

use App\Models\Product;
use App\Providers\Repository\ProductRepository;

class ProductService {

    public static function create(array $data)
    {
        return Product::create($data);
    }

    public static function update(array $data, $id)
    {
        $product = Product::find($id);

        return $product -> update($data);
    }

}
