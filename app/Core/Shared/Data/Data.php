<?php

namespace App\Core\Shared\Data;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as BaseData;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class Data extends BaseData
{
}
