<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on a Mac device.
 */
class SessionTypeMac extends SessionType
{
    public const TYPE_NAME = 'sessionTypeMac';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeMac
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
