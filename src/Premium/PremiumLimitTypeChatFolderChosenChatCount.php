<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of pinned and always included, or always excluded chats in a chat folder.
 */
class PremiumLimitTypeChatFolderChosenChatCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeChatFolderChosenChatCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeChatFolderChosenChatCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
