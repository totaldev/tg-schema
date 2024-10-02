<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to use quick replies.
 */
class BusinessFeatureQuickReplies extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureQuickReplies';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureQuickReplies
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
