<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Allowed to use more reactions
 */
class PremiumFeatureUniqueReactions extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureUniqueReactions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureUniqueReactions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
