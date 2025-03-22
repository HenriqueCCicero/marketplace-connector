<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'stock',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(OfferImage::class);
    }

    public function prices(): HasMany
    {
        return $this->hasMany(OfferPrice::class);
    }
}
