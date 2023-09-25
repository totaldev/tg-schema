<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Allowed to use custom emoji stickers in message texts and captions
 */
class PremiumFeatureCustomEmoji extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureCustomEmoji';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureCustomEmoji
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
