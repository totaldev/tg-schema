<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents the type of a session
 */
class SessionType extends TdObject
{
    public const TYPE_NAME = 'SessionType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SessionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
