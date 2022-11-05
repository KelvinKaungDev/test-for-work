<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Providers\Repository\ProductRepository;
use App\Providers\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = ProductRepository::getAll();

        return response() -> json([
            'result' => $products
        ]);
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        $result = ProductService::create($request -> validated());

        return response() -> json([
            'result' => $result
        ]);
    }

    public function show($id)
    {
        $result = ProductRepository::getById($id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function edit($id)
    {

    }

    public function update(ProductRequest $request, $id)
    {
        $result = ProductService::update($request -> validated(), $id);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function search($model)
    {
        $result = ProductRepository::search($model);

        return response() -> json([
            'result' => $result
        ]);
    }

    public function destroy($id)
    {
        //
    }
}
