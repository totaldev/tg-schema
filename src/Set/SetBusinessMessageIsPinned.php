<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Pins or unpins a message sent on behalf of a business account; for bots only.
 */
class SetBusinessMessageIsPinned extends TdFunction
{
    public const TYPE_NAME = 'setBusinessMessageIsPinned';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int    $chatId,
        /**
         * Identifier of the message.
         */
        protected int    $messageId,
        /**
         * Pass true to pin the message, pass false to unpin it.
         */
        protected bool   $isPinned
    ) {}

    public static function fromArray(array $array): SetBusinessMessageIsPinned
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            $array['message_id'],
            $array['is_pinned'],
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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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
            'is_pinned'              => $this->isPinned,
        ];
    }
}
