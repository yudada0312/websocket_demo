<?php
namespace App\Events;

use App\Events\Event;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
class MemberInfoUpdatedEvent extends Event implements ShouldBroadcast
{

    private $user_id;
    public $member_info = array();

    //public $broadcastQueue = 'push-notice';
    /** 
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {   
        $this->user_id = $user_id;
        $this->member_info = array('aa'=>123);
    }

    /** 
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {   
       // CLog::alarm($this, 'AAA');
        return new PrivateChannel('personal-channel.'.$this->user_id);
       // return new Channel('notice');
    }
/*
    public function broadcastWith(){
        //return ['game_id' => '','expect'=>'','opencode'=>'aa'];
    }
*/

    public function broadcastWhen()
    {
        return true;
    }
}