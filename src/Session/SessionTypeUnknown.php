<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on an unknown type of device
 */
class SessionTypeUnknown extends SessionType
{
    public const TYPE_NAME = 'sessionTypeUnknown';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeUnknown
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
