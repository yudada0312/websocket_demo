<?php
namespace App\Events;

use App\Events\Event;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class GetNewOpencodeEvent extends Event implements ShouldBroadcast
{


    public $opencode;

    //public $broadcastQueue = 'push-notice';
    /** 
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( $opencode)
    {   
        parent::__construct();
        $this->opencode = $opencode;
    }

    /** 
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {   
       // CLog::alarm($this, 'AAA');
        return new Channel('notice');
       //return ["notice"];
    }

   /* public function broadcastWith(){
        return ['game_id' => '','expect'=>'','opencode'=>'aa'];
    }*/


public function broadcastWhen()
{
    return true;
}
}