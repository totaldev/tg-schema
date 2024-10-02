<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on an iPhone device.
 */
class SessionTypeIphone extends SessionType
{
    public const TYPE_NAME = 'sessionTypeIphone';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeIphone
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
