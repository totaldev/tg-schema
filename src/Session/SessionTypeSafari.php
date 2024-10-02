<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on the Safari browser.
 */
class SessionTypeSafari extends SessionType
{
    public const TYPE_NAME = 'sessionTypeSafari';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeSafari
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
