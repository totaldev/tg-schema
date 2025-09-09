<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to use links and formatting in story caption, and use inputStoryAreaTypeLink areas.
 */
class PremiumStoryFeatureLinksAndFormatting extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureLinksAndFormatting';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureLinksAndFormatting
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
