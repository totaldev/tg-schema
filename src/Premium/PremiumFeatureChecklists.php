<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to create and use checklist messages.
 */
class PremiumFeatureChecklists extends PremiumFeature
{
    public const string TYPE_NAME = 'premiumFeatureChecklists';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureChecklists
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
