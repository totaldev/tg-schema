<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns promotional animation for upgraded gifts.
 */
class GetUpgradedGiftsPromotionalAnimation extends TdFunction
{
    public const string TYPE_NAME = 'getUpgradedGiftsPromotionalAnimation';

    public function __construct() {}

    public static function fromArray(array $array): GetUpgradedGiftsPromotionalAnimation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
