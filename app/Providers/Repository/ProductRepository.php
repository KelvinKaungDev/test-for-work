<?php

namespace App\Providers\Repository;

use App\Models\Product;

class ProductRepository {

    public static function getAll()
    {
        return Product::all();
    }

    public static function getById($id)
    {
        return Product::find($id);
    }

    public static function search($model)
    {
        return Product::where('model', 'like', '%'.$model.'%') -> get();
    }
}
