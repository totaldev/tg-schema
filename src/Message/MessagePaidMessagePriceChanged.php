<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A price for paid messages was changed in the supergroup chat.
 */
class MessagePaidMessagePriceChanged extends MessageContent
{
    public const TYPE_NAME = 'messagePaidMessagePriceChanged';

    public function __construct(
        /**
         * The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message.
         */
        protected int $paidMessageStarCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaidMessagePriceChanged
    {
        return new static(
            $array['paid_message_star_count'],
        );
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
