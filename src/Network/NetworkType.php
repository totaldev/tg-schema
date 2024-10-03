<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

use Totaldev\TgSchema\TdObject;

/**
 * Represents the type of network.
 */
class NetworkType extends TdObject
{
    public const TYPE_NAME = 'NetworkType';

    public function __construct() {}

    public static function fromArray(array $array): NetworkType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
