<?php

namespace App\Listeners;

use App\Events\ReplySubmitted;
use App\Reply;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendReplyNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReplySubmitted  $event
     * @return void
     */
    public function handle(ReplySubmitted $event)
    {
        $emailGuest = $event->reply->sentBy;

        $emailGuest->notify(new \App\Notifications\ReplySubmitted($event->reply));
    }
}
