<?php

namespace App\Events;

use App\Reply;

class ReplySubmitted
{
    public $reply;

    public function __construct(Reply $reply)
    {
        $this->reply = $reply;
    }
}
