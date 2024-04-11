<?php

use App\Core\Item\Actions\GenerateItemCodeAction;
use Illuminate\Support\Str;

it('should generate a item code with prefix "I-" and 6 random characters.', function () {
    $mockRandom = '123456';

    Str::createRandomStringsUsing(fn () => $mockRandom);
    $itemCode = GenerateItemCodeAction::execute();
    Str::createRandomStringsNormally();

    expect($itemCode)
        ->toBeString()
        ->toEqual('I-'.$mockRandom);
});
