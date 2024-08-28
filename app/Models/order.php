<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class order extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'customer_id',
        'status',
        'total_amount',
    ];

    // Cast attributes to native types
    protected $casts = [
        'total_amount' => 'decimal:2',
    ];

    // Define relationship with Customer model
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    // Define relationship with Product model through pivot table
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
