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
 * Sends an upgraded gift that is available for resale to another user or channel chat; gifts already owned by the current user must be transferred using
 * transferGift and can't be passed to the method.
 */
class SendResoldGift extends TdFunction
{
    public const string TYPE_NAME = 'sendResoldGift';

    public function __construct(
        /**
         * Name of the upgraded gift to send.
         */
        protected string          $giftName,
        /**
         * Identifier of the user or the channel chat that will receive the gift.
         */
        protected MessageSender   $ownerId,
        /**
         * The price that the user agreed to pay for the gift.
         */
        protected GiftResalePrice $price,
    ) {}

    public static function fromArray(array $array): SendResoldGift
    {
        return new static(
            $array['gift_name'],
            TdSchemaRegistry::fromArray($array['owner_id']),
            TdSchemaRegistry::fromArray($array['price']),
        );
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getPrice(): GiftResalePrice
    {
        return $this->price;
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

    public function setPrice(GiftResalePrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'gift_name' => $this->giftName,
            'owner_id'  => $this->ownerId->typeSerialize(),
            'price'     => $this->price->typeSerialize(),
        ];
    }
}
