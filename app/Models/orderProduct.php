<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class orderProduct extends Pivot
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    // Cast attributes to native types
    protected $casts = [
        'quantity' => 'integer',
    ];
}
