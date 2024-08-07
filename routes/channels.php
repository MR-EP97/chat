<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('messages.rooms.{id}', function ($user) {
    return true;
});

