<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;

/**
 * Reads a message on behalf of a business account; for bots only.
 */
class ReadBusinessMessage extends TdFunction
{
    public const TYPE_NAME = 'readBusinessMessage';

    public function __construct(
        /**
         * Unique identifier of business connection through which the message was received.
         */
        protected string $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int    $chatId,
        /**
         * Identifier of the message.
         */
        protected int    $messageId
    ) {}

    public static function fromArray(array $array): ReadBusinessMessage
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
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
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'message_id'             => $this->messageId,
        ];
    }
}
