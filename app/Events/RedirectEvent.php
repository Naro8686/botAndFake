<?php

namespace App\Events;

use App\Models\Fake;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RedirectEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var Fake
     */
    public $fake;
    public $uuid;
    public $redirectUrl;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Fake $fake, $uuid, $redirectUrl, $message = null)
    {
        $this->fake = $fake;
        $this->uuid = $uuid;
        $this->redirectUrl = $redirectUrl;
        $this->message = $message ?? 'Error';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new Channel("redirect.{$this->fake->track_id}.$this->uuid");
    }

    public function broadcastWith()
    {
        return ['redirectUrl' => $this->redirectUrl, 'message' => $this->message];
    }
}
