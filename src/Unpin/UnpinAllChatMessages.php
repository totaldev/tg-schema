<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unpin;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes all pinned messages from a chat; requires can_pin_messages member right if the chat is a basic group or supergroup, or can_edit_messages
 * administrator right if the chat is a channel.
 */
class UnpinAllChatMessages extends TdFunction
{
    public const TYPE_NAME = 'unpinAllChatMessages';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): UnpinAllChatMessages
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
