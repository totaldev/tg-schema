<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Session;

/**
 * The session is running on the Edge browser
 */
class SessionTypeEdge extends SessionType
{
    public const TYPE_NAME = 'sessionTypeEdge';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SessionTypeEdge
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
