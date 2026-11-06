<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'product_name',
        'product_price',
        'current_stock',
        'price',
    ];

    protected function casts(): array
    {
        return [
            'product_price' => 'decimal:2',
            'current_stock' => 'integer',
            'price' => 'decimal:2',
        ];
    }
}
