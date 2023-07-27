<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

/**
 * Allowed to translate chat messages real-time
 */
class PremiumFeatureRealTimeChatTranslation extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureRealTimeChatTranslation';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureRealTimeChatTranslation
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
