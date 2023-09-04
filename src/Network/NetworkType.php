<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Network;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the type of a network
 */
class NetworkType extends TdObject
{
    public const TYPE_NAME = 'NetworkType';

    public function __construct()
    {
    }

    public static function fromArray(array $array): NetworkType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
