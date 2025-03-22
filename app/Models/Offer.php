<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;

    /**
     * Atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'stock',
    ];

    /**
     * Relacionamento com as imagens da oferta.
     */
    public function images(): HasMany
    {
        return $this->hasMany(OfferImage::class);
    }

    /**
     * Relacionamento com os preços da oferta.
     */
    public function prices(): HasMany
    {
        return $this->hasMany(OfferPrice::class);
    }
}
