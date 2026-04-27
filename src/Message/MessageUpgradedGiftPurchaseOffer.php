<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Gift\GiftPurchaseOfferState;
use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * An offer to purchase an upgraded gift was sent or received.
 */
class MessageUpgradedGiftPurchaseOffer extends MessageContent
{
    public const string TYPE_NAME = 'messageUpgradedGiftPurchaseOffer';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the offer will expire or has expired.
         */
        protected int                    $expirationDate,
        /**
         * The gift.
         */
        protected UpgradedGift           $gift,
        /**
         * The proposed price.
         */
        protected GiftResalePrice        $price,
        /**
         * State of the offer.
         */
        protected GiftPurchaseOfferState $state,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUpgradedGiftPurchaseOffer
    {
        return new static(
            expirationDate: $array['expiration_date'],
            gift          : TdSchemaRegistry::fromArray($array['gift']),
            price         : TdSchemaRegistry::fromArray($array['price']),
            state         : TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getPrice(): GiftResalePrice
    {
        return $this->price;
    }

    public function getState(): GiftPurchaseOfferState
    {
        return $this->state;
    }

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setPrice(GiftResalePrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function setState(GiftPurchaseOfferState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'expiration_date' => $this->expirationDate,
            'gift'            => $this->gift->jsonSerialize(),
            'price'           => $this->price->jsonSerialize(),
            'state'           => $this->state->jsonSerialize(),
        ];
    }
}
