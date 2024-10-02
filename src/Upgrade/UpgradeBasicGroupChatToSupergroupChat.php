<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgrade;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a new supergroup from an existing basic group and sends a corresponding messageChatUpgradeTo and messageChatUpgradeFrom; requires owner privileges.
 * Deactivates the original basic group.
 */
class UpgradeBasicGroupChatToSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'upgradeBasicGroupChatToSupergroupChat';

    public function __construct(
        /**
         * Identifier of the chat to upgrade.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): UpgradeBasicGroupChatToSupergroupChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
