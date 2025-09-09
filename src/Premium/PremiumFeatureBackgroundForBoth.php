<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to set private chat background for both users.
 */
class PremiumFeatureBackgroundForBoth extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureBackgroundForBoth';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureBackgroundForBoth
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
