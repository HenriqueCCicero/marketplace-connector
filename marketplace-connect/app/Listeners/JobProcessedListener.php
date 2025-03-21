<?php

namespace App\Listeners;

use App\Jobs\ImportOfferJob;
use App\UseCases\Interfaces\OfferUseCaseInterface;
use Illuminate\Queue\Events\JobProcessed;

class JobProcessedListener
{
    public function __construct(
        private readonly OfferUseCaseInterface $offerUseCase
    ) {}

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle(JobProcessed $event)
    {
        $data = $this->getData($event);

        match ($event->job->resolveName()) {
            ImportOfferJob::class => $this->offerUseCase->requestExport(data_get($data, 'offerId')),
        };
    }

    private function getData(JobProcessed $event): ?object
    {
        $payload = $event->job->payload();
        $data = data_get($payload, 'data.command');

        return unserialize($data);
    }
}
