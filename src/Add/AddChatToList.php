<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Chat\ChatList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a chat to a chat list. A chat can't be simultaneously in Main and Archive chat lists, so it is automatically removed from another one if needed.
 */
class AddChatToList extends TdFunction
{
    public const TYPE_NAME = 'addChatToList';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int      $chatId,
        /**
         * The chat list. Use getChatListsToAddChat to get suitable chat lists.
         */
        protected ChatList $chatList
    ) {}

    public static function fromArray(array $array): AddChatToList
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['chat_list']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChatList(): ChatList
    {
        return $this->chatList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'chat_list' => $this->chatList->typeSerialize(),
        ];
    }
}
