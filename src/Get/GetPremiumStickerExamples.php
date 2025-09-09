<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns examples of premium stickers for demonstration purposes.
 */
class GetPremiumStickerExamples extends TdFunction
{
    public const TYPE_NAME = 'getPremiumStickerExamples';

    public function __construct() {}

    public static function fromArray(array $array): GetPremiumStickerExamples
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
