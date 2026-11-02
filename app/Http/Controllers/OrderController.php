<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function index()
    {
        $orders = [
            [
                'order_number' => 'ORD-001',
                'customer_name' => 'Andi Pratama',
                'total_price' => 150000,
            ],
            [
                'order_number' => 'ORD-002',
                'customer_name' => 'Siti Aisyah',
                'total_price' => 275000,
            ],
        ];

        return view('order.index', compact('orders'));
    }
}

