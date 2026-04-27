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
    public const string TYPE_NAME = 'setBusinessMessageIsPinned';

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
         * Pass true to pin the message, pass false to unpin it.
         */
        protected bool   $isPinned,
        /**
         * Identifier of the message.
         */
        protected int    $messageId,
    ) {}

    public static function fromArray(array $array): SetBusinessMessageIsPinned
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            isPinned            : $array['is_pinned'],
            messageId           : $array['message_id'],
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

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'is_pinned'              => $this->isPinned,
            'message_id'             => $this->messageId,
        ];
    }
}
