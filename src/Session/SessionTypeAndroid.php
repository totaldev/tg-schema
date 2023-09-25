<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on an Android device
 */
class SessionTypeAndroid extends SessionType
{
    public const TYPE_NAME = 'sessionTypeAndroid';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeAndroid
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
