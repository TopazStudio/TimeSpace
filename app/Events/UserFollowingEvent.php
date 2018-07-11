<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Broadcast a user following. The user being followed will
 * receive this notification in the users private channel.
 *
*/
class UserFollowingEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var $user User User following the user receiving this broadcast
    */
    public $user;

    /**
     * @var $channel string Private channel to broadcast to.
    */
    private $channel;

    /**
     * The name of the queue on which to place the event.
     *
     * @var string
     */
    public $broadcastQueue = 'followers';

    /**
     * Create a new event instance. We pass in the instance of
     * the user following the user who will receive the notification and the
     * private channel the latter will listen to.
     *
     * @param string $channel
     * @param User $user
     */
    public function __construct(string $channel,User $user)
    {
        $this->user = $user;
        $this->channel = $channel;
    }

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'user.following';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('user-'.$this->channel);
    }
}
