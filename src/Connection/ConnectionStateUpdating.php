<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connection;

/**
 * Downloading data supposed to be received while the application was offline.
 */
class ConnectionStateUpdating extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateUpdating';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateUpdating
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
