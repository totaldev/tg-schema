<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to save other's unprotected stories.
 */
class PremiumStoryFeatureSaveStories extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureSaveStories';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureSaveStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
