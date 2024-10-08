<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a chat to the list of recently found chats. The chat is added to the beginning of the list. If the chat is already in the list, it will be removed from
 * the list first.
 */
class AddRecentlyFoundChat extends TdFunction
{
    public const TYPE_NAME = 'addRecentlyFoundChat';

    public function __construct(
        /**
         * Identifier of the chat to add.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): AddRecentlyFoundChat
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
