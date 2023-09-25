<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The ability to hide the fact that the user viewed other's stories
 */
class PremiumStoryFeatureStealthMode extends PremiumStoryFeature
{
    public const TYPE_NAME = 'premiumStoryFeatureStealthMode';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumStoryFeatureStealthMode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
