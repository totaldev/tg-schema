<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns all close friends of the current user
 */
class GetCloseFriends extends TdFunction
{
    public const TYPE_NAME = 'getCloseFriends';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetCloseFriends
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
