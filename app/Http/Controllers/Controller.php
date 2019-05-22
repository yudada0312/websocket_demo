<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Events\MemberInfoUpdatedEvent;
use App\Events\GetNewOpencodeEvent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function demo1(){
        event(new MemberInfoUpdatedEvent(1));
        echo '發送金錢異動通知';
    }

    public function demo2(){
        event(new GetNewOpencodeEvent(123456));
        echo '更新開獎號碼';
    }
}
