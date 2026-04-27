<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Auction\AuctionState;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represent auction state of a gift.
 */
class GiftAuctionState extends TdObject
{
    public const string TYPE_NAME = 'giftAuctionState';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift         $gift,
        /**
         * Auction state of the gift.
         */
        protected AuctionState $state,
    ) {}

    public static function fromArray(array $array): GiftAuctionState
    {
        return new static(
            gift : TdSchemaRegistry::fromArray($array['gift']),
            state: TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getState(): AuctionState
    {
        return $this->state;
    }

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setState(AuctionState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gift'  => $this->gift->jsonSerialize(),
            'state' => $this->state->jsonSerialize(),
        ];
    }
}
