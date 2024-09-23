<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'name',
        'icon'
    ];

    protected $with = [
        'raffles'
    ];


    public function raffles(): HasMany
    {
        return $this->hasMany(Raffle::class);
    }
}
