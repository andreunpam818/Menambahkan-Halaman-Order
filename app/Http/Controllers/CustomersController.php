<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = [
            ["name" => "Nadia Putri",
             "email" => "nadia@example.com",
             "city" => "Jakarta"
            ],
        ];
 
        return view("customers.index", ["customers" => $customers]);
    }
}

