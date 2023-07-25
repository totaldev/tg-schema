<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TdSchema;

/**
 * Moves a chat to a different chat list. Current chat list of the chat must ne non-null.
 */
class SetChatChatList extends TdFunction
{
    public const TYPE_NAME = 'setChatChatList';

    /**
     * Chat identifier.
     */
    protected int $chatId;

    /**
     * New chat list of the chat.
     */
    protected ChatList $chatList;

    public function __construct(int $chatId, ChatList $chatList)
    {
        $this->chatId   = $chatId;
        $this->chatList = $chatList;
    }

    public static function fromArray(array $array): SetChatChatList
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['chat_list']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'chat_list' => $this->chatList->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }
}
