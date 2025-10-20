<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to create links to the business account with predefined message text.
 */
class BusinessFeatureAccountLinks extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureAccountLinks';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureAccountLinks
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
