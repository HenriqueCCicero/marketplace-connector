<?php

namespace App\Jobs;

use App\UseCases\Interfaces\OfferPersistUseCaseInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportOfferJob implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public readonly int $offerId
    ) {}

    public function uniqueId(): int
    {
        return $this->offerId;
    }

    /**
     * Execute the job.
     */
    public function handle(OfferPersistUseCaseInterface $offerUseCase): void
    {
        $offerUseCase->import($this->offerId);
    }
}
