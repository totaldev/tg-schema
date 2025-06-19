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
    public const TYPE_NAME = 'messagePaidMessagesRefunded';

    public function __construct(
        /**
         * The number of refunded messages.
         */
        protected int $messageCount,
        /**
         * The number of refunded Telegram Stars.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaidMessagesRefunded
    {
        return new static(
            $array['message_count'],
            $array['star_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'message_count' => $this->messageCount,
            'star_count'    => $this->starCount,
        ];
    }
}
