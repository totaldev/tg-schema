<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on an Ubuntu device
 */
class SessionTypeUbuntu extends SessionType
{
    public const TYPE_NAME = 'sessionTypeUbuntu';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeUbuntu
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
