<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to extend their expiring Telegram Star subscriptions. Call getStarSubscriptions with only_expiring == true to get the number of expiring
 * subscriptions and the number of required to buy Telegram Stars.
 */
class SuggestedActionExtendStarSubscriptions extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionExtendStarSubscriptions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionExtendStarSubscriptions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
