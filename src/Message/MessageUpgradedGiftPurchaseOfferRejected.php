<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * An offer to purchase a gift was rejected or expired.
 */
class MessageUpgradedGiftPurchaseOfferRejected extends MessageContent
{
    public const string TYPE_NAME = 'messageUpgradedGiftPurchaseOfferRejected';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift    $gift,
        /**
         * Identifier of the message with purchase offer which was rejected or expired; may be 0 or an identifier of a deleted message.
         */
        protected int             $offerMessageId,
        /**
         * The proposed price.
         */
        protected GiftResalePrice $price,
        /**
         * True, if the offer has expired; otherwise, the offer was explicitly rejected.
         */
        protected bool            $wasExpired,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUpgradedGiftPurchaseOfferRejected
    {
        return new static(
            gift          : TdSchemaRegistry::fromArray($array['gift']),
            offerMessageId: $array['offer_message_id'],
            price         : TdSchemaRegistry::fromArray($array['price']),
            wasExpired    : $array['was_expired'],
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getOfferMessageId(): int
    {
        return $this->offerMessageId;
    }

    public function getPrice(): GiftResalePrice
    {
        return $this->price;
    }

    public function getWasExpired(): bool
    {
        return $this->wasExpired;
    }

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setOfferMessageId(int $value): static
    {
        $this->offerMessageId = $value;

        return $this;
    }

    public function setPrice(GiftResalePrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function setWasExpired(bool $value): static
    {
        $this->wasExpired = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'gift'             => $this->gift->jsonSerialize(),
            'offer_message_id' => $this->offerMessageId,
            'price'            => $this->price->jsonSerialize(),
            'was_expired'      => $this->wasExpired,
        ];
    }
}
