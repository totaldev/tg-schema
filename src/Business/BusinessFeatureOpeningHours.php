<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to set opening hours.
 */
class BusinessFeatureOpeningHours extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureOpeningHours';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureOpeningHours
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
