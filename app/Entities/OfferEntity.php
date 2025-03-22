<?php

namespace App\Entities;

class OfferEntity
{
    /**
     * Cria uma nova instância da entidade OfferEntity.
     */
    public function __construct(
        public readonly int $id,
        public readonly ?string $title = null,
        public readonly ?string $description = null,
        public readonly ?string $status = null,
        public readonly ?int $stock = null,
        public readonly ?array $images = [],
        public readonly ?array $prices = [],
    ) {}

    /**
     * Hidrata a entidade OfferEntity.
     */
    public static function hydrate(object $data): self
    {
        return new self(
            data_get($data, 'id'),
            data_get($data, 'title'),
            data_get($data, 'description'),
            data_get($data, 'status'),
            data_get($data, 'stock'),
            data_get($data, 'images'),
            data_get($data, 'prices'),
        );
    }
}
