<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on the Firefox browser
 */
class SessionTypeFirefox extends SessionType
{
    public const TYPE_NAME = 'sessionTypeFirefox';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeFirefox
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
