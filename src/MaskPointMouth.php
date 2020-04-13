<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A mask should be placed relatively to the mouth.
 */
class MaskPointMouth extends MaskPoint
{
    public const TYPE_NAME = 'maskPointMouth';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): MaskPointMouth
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
