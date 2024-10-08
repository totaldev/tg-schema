<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connection;

/**
 * There is a working connection to the Telegram servers.
 */
class ConnectionStateReady extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateReady';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateReady
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
