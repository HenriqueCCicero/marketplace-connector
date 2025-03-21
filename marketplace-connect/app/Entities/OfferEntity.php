<?php

namespace App\Entities;

class OfferEntity
{
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
        public readonly int $stock,
        public readonly ?array $images,
        public readonly ?array $prices,
    ) {}

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
