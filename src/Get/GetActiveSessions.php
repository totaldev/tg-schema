<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns all active sessions of the current user.
 */
class GetActiveSessions extends TdFunction
{
    public const TYPE_NAME = 'getActiveSessions';

    public function __construct() {}

    public static function fromArray(array $array): GetActiveSessions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
