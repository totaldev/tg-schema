<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns saved animations
 */
class GetSavedAnimations extends TdFunction
{
    public const TYPE_NAME = 'getSavedAnimations';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetSavedAnimations
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
