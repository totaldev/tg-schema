<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to compose text with AI.
 */
class PremiumFeatureTextComposition extends PremiumFeature
{
    public const string TYPE_NAME = 'premiumFeatureTextComposition';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureTextComposition
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
