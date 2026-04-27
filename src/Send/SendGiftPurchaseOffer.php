<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends an offer to purchase an upgraded gift.
 */
class SendGiftPurchaseOffer extends TdFunction
{
    public const string TYPE_NAME = 'sendGiftPurchaseOffer';

    public function __construct(
        /**
         * Duration of the offer, in seconds; must be one of 21600, 43200, 86400, 129600, 172800, or 259200. Can also be 120 if Telegram test environment is used.
         */
        protected int             $duration,
        /**
         * Name of the upgraded gift.
         */
        protected string          $giftName,
        /**
         * Identifier of the user or the channel chat that currently owns the gift and will receive the offer.
         */
        protected MessageSender   $ownerId,
        /**
         * The number of Telegram Stars the user agreed to pay additionally for sending of the offer message to the current gift owner; pass userFullInfo.outgoing_paid_message_star_count for users and 0 otherwise.
         */
        protected int             $paidMessageStarCount,
        /**
         * The price that the user agreed to pay for the gift.
         */
        protected GiftResalePrice $price,
    ) {}

    public static function fromArray(array $array): SendGiftPurchaseOffer
    {
        return new static(
            duration            : $array['duration'],
            giftName            : $array['gift_name'],
            ownerId             : TdSchemaRegistry::fromArray($array['owner_id']),
            paidMessageStarCount: $array['paid_message_star_count'],
            price               : TdSchemaRegistry::fromArray($array['price']),
        );
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getPrice(): GiftResalePrice
    {
        return $this->price;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setGiftName(string $value): static
    {
        $this->giftName = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setPaidMessageStarCount(int $value): static
    {
        $this->paidMessageStarCount = $value;

        return $this;
    }

    public function setPrice(GiftResalePrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'duration'                => $this->duration,
            'gift_name'               => $this->giftName,
            'owner_id'                => $this->ownerId->jsonSerialize(),
            'paid_message_star_count' => $this->paidMessageStarCount,
            'price'                   => $this->price->jsonSerialize(),
        ];
    }
}
