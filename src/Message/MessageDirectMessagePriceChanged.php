<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A price for direct messages was changed in the channel chat.
 */
class MessageDirectMessagePriceChanged extends MessageContent
{
    public const TYPE_NAME = 'messageDirectMessagePriceChanged';

    public function __construct(
        /**
         * True, if direct messages group was enabled for the channel; false otherwise.
         */
        protected bool $isEnabled,
        /**
         * The new number of Telegram Stars that must be paid by non-administrator users of the channel chat for each message sent to the direct messages group; 0 if the direct messages group was disabled or the messages are free.
         */
        protected int  $paidMessageStarCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageDirectMessagePriceChanged
    {
        return new static(
            $array['is_enabled'],
            $array['paid_message_star_count'],
        );
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'is_enabled'              => $this->isEnabled,
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
