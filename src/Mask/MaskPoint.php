<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Mask;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Part of the face, relative to which a mask is placed
 */
class MaskPoint extends TdObject
{
    public const TYPE_NAME = 'MaskPoint';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MaskPoint
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
