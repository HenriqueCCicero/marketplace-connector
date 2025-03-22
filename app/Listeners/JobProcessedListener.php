<?php

namespace App\Listeners;

use App\Jobs\ImportOfferJob;
use App\UseCases\Interfaces\OfferUseCaseInterface;
use Illuminate\Queue\Events\JobProcessed;

class JobProcessedListener
{
    /**
     * Cria uma nova instância do Listener.
     */
    public function __construct(
        private readonly OfferUseCaseInterface $offerUseCase
    ) {}

    /**
     * Handle do evento JobProcessed.
     *
     * @return void
     */
    public function handle(JobProcessed $event)
    {
        $data = $this->getData($event);

        match ($event->job->resolveName()) {
            ImportOfferJob::class => $this->offerUseCase->requestExport(data_get($data, 'offerId')),
            default => null,
        };
    }

    /**
     * Obtem os dados da Job.
     */
    private function getData(JobProcessed $event): ?object
    {
        $payload = $event->job->payload();
        $data = data_get($payload, 'data.command');

        return unserialize($data);
    }
}
