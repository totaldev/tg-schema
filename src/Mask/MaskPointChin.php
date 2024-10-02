<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Mask;

/**
 * The mask is placed relatively to the chin.
 */
class MaskPointChin extends MaskPoint
{
    public const TYPE_NAME = 'maskPointChin';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MaskPointChin
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
