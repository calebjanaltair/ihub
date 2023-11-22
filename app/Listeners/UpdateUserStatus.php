<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateUserStatus
{
    public function handle(Verified $event)
    {
        $event->user->update(['status' => 1]);
    }
}
