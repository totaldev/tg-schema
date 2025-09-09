<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns messages in a message thread of a message. Can be used only if messageProperties.can_get_message_thread == true. Message thread of a channel message
 * is in the channel's linked supergroup. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id). For optimal
 * performance, the number of returned messages is chosen by TDLib.
 */
class GetMessageThreadHistory extends TdFunction
{
    public const TYPE_NAME = 'getMessageThreadHistory';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Message identifier, which thread history needs to be returned.
         */
        protected int $messageId,
        /**
         * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
         */
        protected int $fromMessageId,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
         */
        protected int $offset,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): GetMessageThreadHistory
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['from_message_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'message_id'      => $this->messageId,
            'from_message_id' => $this->fromMessageId,
            'offset'          => $this->offset,
            'limit'           => $this->limit,
        ];
    }
}
