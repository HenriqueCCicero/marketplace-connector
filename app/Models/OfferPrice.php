<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Classe OfferPrice
 */
class OfferPrice extends Model
{
    use HasFactory;

    /**
     * Atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'offer_id',
        'price',
    ];

    /**
     * Relacionamento com a oferta.
     */
    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
