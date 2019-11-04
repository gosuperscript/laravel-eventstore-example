<?php

namespace App\Events;

use DigitalRisks\LaravelEventStore\Contracts\CouldBeReceived;
use DigitalRisks\LaravelEventStore\Contracts\ShouldBeStored;
use DigitalRisks\LaravelEventStore\Traits\AddsHerokuMetadata;
use DigitalRisks\LaravelEventStore\Traits\AddsLaravelMetadata;
use DigitalRisks\LaravelEventStore\Traits\AddsUserMetaData;
use DigitalRisks\LaravelEventStore\Traits\ReceivedFromEventStore;
use DigitalRisks\LaravelEventStore\Traits\SendsToEventStore;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuoteStarted implements ShouldBeStored, CouldBeReceived
{
    use Dispatchable, SerializesModels, SendsToEventStore, ReceivedFromEventStore, AddsUserMetaData, AddsHerokuMetadata, AddsLaravelMetadata;

    public $ref;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($ref = null)
    {
        $this->ref = $ref;
    }

    public function getEventStream(): string
    {
        return 'example-quotes';
    }

    public function getEventType(): string
    {
        return 'quote_started';
    }
}
