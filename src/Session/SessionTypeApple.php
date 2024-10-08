<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on a generic Apple device.
 */
class SessionTypeApple extends SessionType
{
    public const TYPE_NAME = 'sessionTypeApple';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeApple
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
