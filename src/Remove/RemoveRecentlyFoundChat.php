<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a chat from the list of recently found chats.
 */
class RemoveRecentlyFoundChat extends TdFunction
{
    public const TYPE_NAME = 'removeRecentlyFoundChat';

    public function __construct(
        /**
         * Identifier of the chat to be removed.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): RemoveRecentlyFoundChat
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
