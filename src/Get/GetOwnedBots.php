<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of bots owned by the current user.
 */
class GetOwnedBots extends TdFunction
{
    public const TYPE_NAME = 'getOwnedBots';

    public function __construct() {}

    public static function fromArray(array $array): GetOwnedBots
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
