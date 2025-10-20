<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * Allowed to use many additional features for stories.
 */
class BusinessFeatureUpgradedStories extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureUpgradedStories';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureUpgradedStories
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
