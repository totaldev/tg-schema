<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Mask;

/**
 * The mask is placed relatively to the forehead.
 */
class MaskPointForehead extends MaskPoint
{
    public const TYPE_NAME = 'maskPointForehead';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MaskPointForehead
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
