<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on the Opera browser
 */
class SessionTypeOpera extends SessionType
{
    public const TYPE_NAME = 'sessionTypeOpera';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeOpera
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
