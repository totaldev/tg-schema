<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on an Xbox console.
 */
class SessionTypeXbox extends SessionType
{
    public const TYPE_NAME = 'sessionTypeXbox';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeXbox
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
