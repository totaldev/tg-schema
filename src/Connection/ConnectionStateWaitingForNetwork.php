<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connection;

/**
 * Waiting for the network to become available. Use setNetworkType to change the available network type.
 */
class ConnectionStateWaitingForNetwork extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateWaitingForNetwork';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateWaitingForNetwork
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
