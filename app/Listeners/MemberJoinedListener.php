<?php

namespace App\Listeners;

use App\Events\MemberJoined;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MemberJoinedListener implements ShouldQueue
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
     * @param  MemberJoined  $event
     * @return void
     */
    public function handle(MemberJoined $event)
    {
        $member = $event->member;
    }
}
