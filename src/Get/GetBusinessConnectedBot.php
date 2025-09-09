<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the business bot that is connected to the current user account. Returns a 404 error if there is no connected bot.
 */
class GetBusinessConnectedBot extends TdFunction
{
    public const TYPE_NAME = 'getBusinessConnectedBot';

    public function __construct() {}

    public static function fromArray(array $array): GetBusinessConnectedBot
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
