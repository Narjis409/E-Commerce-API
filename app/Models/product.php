<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'description',
        'cost',
        'price',
        'category_id',
        'stock',
    ];

    
    protected $casts = [
        'cost' => 'decimal:2',
        'price' => 'decimal:2',
    ];

   
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
