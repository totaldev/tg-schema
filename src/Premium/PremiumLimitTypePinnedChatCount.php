<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The maximum number of pinned chats in the main chat list
 */
class PremiumLimitTypePinnedChatCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypePinnedChatCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypePinnedChatCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
