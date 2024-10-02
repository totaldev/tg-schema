<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A giveaway was created for the chat. Use telegramPaymentPurposePremiumGiveaway, storePaymentPurposePremiumGiveaway, telegramPaymentPurposeStarGiveaway, or
 * storePaymentPurposeStarGiveaway to create a giveaway.
 */
class MessageGiveawayCreated extends MessageContent
{
    public const TYPE_NAME = 'messageGiveawayCreated';

    public function __construct(
        /**
         * Number of Telegram Stars that will be shared by winners of the giveaway; 0 for Telegram Premium giveaways.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayCreated
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
