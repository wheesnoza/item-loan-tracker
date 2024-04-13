<?php

namespace App\Core\Notification\Enums;

enum NotificationCategory: int
{
    case ItemStockIncreased = 1;
    case ItemStockDecreased = 2;
}
