<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns gifts that can be sent to other users and channel chats.
 */
class GetAvailableGifts extends TdFunction
{
    public const TYPE_NAME = 'getAvailableGifts';

    public function __construct() {}

    public static function fromArray(array $array): GetAvailableGifts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
