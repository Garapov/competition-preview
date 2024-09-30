<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Raffle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'end',
        'price',
        'discount_price',
        'tickets_count'
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected static function booted()
    {

        static::created(function ($raffle) {
            // dd($raffle->id);
            Ticket::factory($raffle->tickets_count)->create([
                'raffle_id' => $raffle->id
            ]);
        });

    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

}
