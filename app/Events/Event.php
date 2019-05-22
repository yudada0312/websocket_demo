<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use CLog;
abstract class Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $server_time='';

    //public $broadcastQueue = 'push-notice';
    /** 
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {   
        //$this->datetime = date('Y-m-d H:i:s', strtotime('+20 second'));
        $this->server_time = date('Y-m-d H:i:s');
    }
}