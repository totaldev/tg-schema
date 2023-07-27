<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session is running on a Windows device
 */
class SessionTypeWindows extends SessionType
{
    public const TYPE_NAME = 'sessionTypeWindows';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeWindows
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
