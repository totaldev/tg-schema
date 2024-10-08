<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to show an emoji status along with the user's name.
 */
class PremiumFeatureEmojiStatus extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureEmojiStatus';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureEmojiStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
