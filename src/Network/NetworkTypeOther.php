<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

/**
 * A different network type (e.g., Ethernet network).
 */
class NetworkTypeOther extends NetworkType
{
    public const string TYPE_NAME = 'networkTypeOther';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkTypeOther
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
