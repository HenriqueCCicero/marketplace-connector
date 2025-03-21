<?php

namespace App\Jobs;

use App\UseCases\Interfaces\OfferUseCaseInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ExportOfferJob implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        private readonly int $offerId
    ) {}

    public function uniqueId(): int
    {
        return $this->offerId;
    }

    /**
     * Execute the job.
     */
    public function handle(OfferUseCaseInterface $offerUseCase): void
    {
        $offerUseCase->export($this->offerId);
    }
}
