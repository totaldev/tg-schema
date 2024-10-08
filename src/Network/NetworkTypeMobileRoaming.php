<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

/**
 * A mobile roaming network.
 */
class NetworkTypeMobileRoaming extends NetworkType
{
    public const TYPE_NAME = 'networkTypeMobileRoaming';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkTypeMobileRoaming
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
