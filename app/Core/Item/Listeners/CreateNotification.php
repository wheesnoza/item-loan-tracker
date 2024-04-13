<?php

namespace App\Core\Item\Listeners;

use App\Core\Item\Events\ItemEditedEvent;

class CreateNotification
{
    public function handle(ItemEditedEvent $event): void
    {
    }
}
