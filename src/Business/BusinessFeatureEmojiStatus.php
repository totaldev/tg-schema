<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to show an emoji status along with the business name.
 */
class BusinessFeatureEmojiStatus extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureEmojiStatus';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureEmojiStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
