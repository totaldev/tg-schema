<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to use tags in Saved Messages.
 */
class PremiumFeatureSavedMessagesTags extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureSavedMessagesTags';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureSavedMessagesTags
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
