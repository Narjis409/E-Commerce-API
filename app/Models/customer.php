<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class customer extends Model
{
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    // Define relationship with Order model
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
