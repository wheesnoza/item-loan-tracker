<?php

namespace App\Core\Request\Enums;

enum RequestState: int
{
    case Reserved = 1;
    case Pending = 2;
    case Processing = 3;
    case Declined = 4;
    case Cancelled = 5;
    case Mailed = 6;
    case Delivered = 7;
    case Processed = 8;
}
