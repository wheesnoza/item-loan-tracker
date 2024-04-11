<?php

namespace App\Core\Item\Actions;

use Illuminate\Support\Str;

final class GenerateItemCodeAction
{
    public static function execute(): string
    {
        $uncosistent = Str::random(6);
        $itemCode = Str::of($uncosistent)->upper()->start('I-');

        return (string) $itemCode;
    }
}
