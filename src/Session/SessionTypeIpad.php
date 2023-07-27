<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on an iPad device
 */
class SessionTypeIpad extends SessionType
{
    public const TYPE_NAME = 'sessionTypeIpad';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeIpad
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
