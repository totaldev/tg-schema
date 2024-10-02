<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdObject;

/**
 * Represents the type of session.
 */
class SessionType extends TdObject
{
    public const TYPE_NAME = 'SessionType';

    public function __construct() {}

    public static function fromArray(array $array): SessionType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
