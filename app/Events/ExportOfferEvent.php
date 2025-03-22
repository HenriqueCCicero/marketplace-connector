<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExportOfferEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Constructor.
     */
    public function __construct(
        public readonly int $offerId
    ) {}

    /**
     * Obtenha os canais nos quais o evento deve ser transmitido.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
