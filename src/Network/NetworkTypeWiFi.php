<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

/**
 * A Wi-Fi network.
 */
class NetworkTypeWiFi extends NetworkType
{
    public const TYPE_NAME = 'networkTypeWiFi';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkTypeWiFi
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
