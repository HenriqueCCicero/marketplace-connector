<?php

namespace App\Entities;

class OfferHubEntity
{
    /**
     * Construtor da OfferHubEntity.
     */
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
        public readonly int $stock,
    ) {}

    /**
     * Desidratação da OfferHubEntity.
     */
    public function dehydration(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'stock' => $this->stock,
        ];
    }
}
