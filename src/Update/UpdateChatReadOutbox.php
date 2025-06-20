<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Outgoing messages were read.
 */
class UpdateChatReadOutbox extends Update
{
    public const TYPE_NAME = 'updateChatReadOutbox';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of last read outgoing message.
         */
        protected int $lastReadOutboxMessageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatReadOutbox
    {
        return new static(
            $array['chat_id'],
            $array['last_read_outbox_message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLastReadOutboxMessageId(): int
    {
        return $this->lastReadOutboxMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'last_read_outbox_message_id' => $this->lastReadOutboxMessageId,
        ];
    }
}
