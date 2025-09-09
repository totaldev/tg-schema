<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of pinned Saved Messages topics.
 */
class PremiumLimitTypePinnedSavedMessagesTopicCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypePinnedSavedMessagesTopicCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypePinnedSavedMessagesTopicCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
