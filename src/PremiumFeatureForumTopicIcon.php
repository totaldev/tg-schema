<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The ability to set a custom emoji as a forum topic icon
 */
class PremiumFeatureForumTopicIcon extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureForumTopicIcon';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureForumTopicIcon
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
