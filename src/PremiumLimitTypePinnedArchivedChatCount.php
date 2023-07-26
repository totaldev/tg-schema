<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The maximum number of pinned chats in the archive chat list
 */
class PremiumLimitTypePinnedArchivedChatCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypePinnedArchivedChatCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypePinnedArchivedChatCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
