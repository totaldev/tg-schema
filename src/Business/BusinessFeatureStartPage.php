<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to customize start page.
 */
class BusinessFeatureStartPage extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureStartPage';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureStartPage
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
