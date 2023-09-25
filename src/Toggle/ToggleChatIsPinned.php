<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the pinned state of a chat. There can be up to getOption("pinned_chat_count_max")/getOption("pinned_archived_chat_count_max") pinned non-secret chats and the same number of secret chats in the main/archive chat list. The limit can be increased with Telegram Premium
 */
class ToggleChatIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsPinned';

    /**
     * Chat list in which to change the pinned state of the chat
     *
     * @var ChatList
     */
    protected ChatList $chatList;

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true to pin the chat; pass false to unpin it
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(ChatList $chatList, int $chatId, bool $isPinned)
    {
        $this->chatList = $chatList;
        $this->chatId = $chatId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleChatIsPinned
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_list']),
            $array['chat_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_list' => $this->chatList->typeSerialize(),
            'chat_id' => $this->chatId,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
