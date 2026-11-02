<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = [
            ["name" => "Product 1",
             "price" => 1000,
             "stock" => 10
            ],
             ["name" => "Product 2",
             "price" => 2000,
             "stock" => 5
            ],
        ];
 
        return view("products.index", ["products" => $products]);
    }
}

