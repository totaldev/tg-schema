<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about background to set
 */
class InputBackground extends TdObject
{
    public const TYPE_NAME = 'InputBackground';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputBackground
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
