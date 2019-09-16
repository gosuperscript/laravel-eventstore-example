<?php

namespace App\Events;

use DigitalRisks\LaravelEventStore\Contracts\CouldBeReceived;
use DigitalRisks\LaravelEventStore\Contracts\ShouldBeEventStored;
use DigitalRisks\LaravelEventStore\Traits\ReceivedFromEventStore;
use DigitalRisks\LaravelEventStore\Traits\SendsToEventStore;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class QuotePaid implements ShouldBeEventStored, CouldBeReceived
{
    use Dispatchable, SerializesModels, SendsToEventStore, ReceivedFromEventStore;

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
        return 'quote_paid';
    }
}
