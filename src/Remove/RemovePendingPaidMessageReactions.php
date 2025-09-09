<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes all pending paid reactions on a message.
 */
class RemovePendingPaidMessageReactions extends TdFunction
{
    public const TYPE_NAME = 'removePendingPaidMessageReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): RemovePendingPaidMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
