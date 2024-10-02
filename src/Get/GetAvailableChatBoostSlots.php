<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of available chat boost slots for the current user.
 */
class GetAvailableChatBoostSlots extends TdFunction
{
    public const TYPE_NAME = 'getAvailableChatBoostSlots';

    public function __construct() {}

    public static function fromArray(array $array): GetAvailableChatBoostSlots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
