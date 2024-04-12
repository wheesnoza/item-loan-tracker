<?php

namespace App\Core\Request\Enums;

enum RequestState: int
{
    case Requested = 1;
    case Accepted = 2;
    case Declined = 3;
    case Mailed = 4;
    case Delivered = 5;
    case Proccesed = 6;
}
