<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The session is running on an iPhone device
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
