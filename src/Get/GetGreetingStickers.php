<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns greeting stickers from regular sticker sets that can be used for the start page of other users.
 */
class GetGreetingStickers extends TdFunction
{
    public const TYPE_NAME = 'getGreetingStickers';

    public function __construct() {}

    public static function fromArray(array $array): GetGreetingStickers
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
