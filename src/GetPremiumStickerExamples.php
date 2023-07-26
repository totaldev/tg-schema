<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns examples of premium stickers for demonstration purposes
 */
class GetPremiumStickerExamples extends TdFunction
{
    public const TYPE_NAME = 'getPremiumStickerExamples';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetPremiumStickerExamples
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
