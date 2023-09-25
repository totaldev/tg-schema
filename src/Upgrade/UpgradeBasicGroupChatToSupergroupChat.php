<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgrade;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new supergroup from an existing basic group and sends a corresponding messageChatUpgradeTo and messageChatUpgradeFrom; requires creator privileges. Deactivates the original basic group
 */
class UpgradeBasicGroupChatToSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'upgradeBasicGroupChatToSupergroupChat';

    /**
     * Identifier of the chat to upgrade
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): UpgradeBasicGroupChatToSupergroupChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
