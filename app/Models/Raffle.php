<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Raffle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'end',
        'price',
        'tickets'
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    protected static function booted()
    {

        static::creating(function ($raffle) {
            Ticket::factory(10)->create();
        });
    }

}
