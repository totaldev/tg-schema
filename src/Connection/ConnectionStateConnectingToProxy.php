<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connection;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Currently establishing a connection with a proxy server
 */
class ConnectionStateConnectingToProxy extends ConnectionState
{
    public const TYPE_NAME = 'connectionStateConnectingToProxy';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ConnectionStateConnectingToProxy
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
