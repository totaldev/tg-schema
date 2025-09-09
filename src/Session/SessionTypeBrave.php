<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on the Brave browser.
 */
class SessionTypeBrave extends SessionType
{
    public const TYPE_NAME = 'sessionTypeBrave';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeBrave
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
