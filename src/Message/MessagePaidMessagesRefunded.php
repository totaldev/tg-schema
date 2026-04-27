<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Paid messages were refunded.
 */
class MessagePaidMessagesRefunded extends MessageContent
{
    public const string TYPE_NAME = 'messagePaidMessagesRefunded';

    public function __construct(
        /**
         * The number of refunded messages.
         */
        protected int $messageCount,
        /**
         * The number of refunded Telegram Stars.
         */
        protected int $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaidMessagesRefunded
    {
        return new static(
            messageCount: $array['message_count'],
            starCount   : $array['star_count'],
        );
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setMessageCount(int $value): static
    {
        $this->messageCount = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'message_count' => $this->messageCount,
            'star_count'    => $this->starCount,
        ];
    }
}
