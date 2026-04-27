<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a gift auction.
 */
class LinkPreviewTypeGiftAuction extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeGiftAuction';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the auction will be ended.
         */
        protected int  $auctionEndDate,
        /**
         * The gift.
         */
        protected Gift $gift,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeGiftAuction
    {
        return new static(
            auctionEndDate: $array['auction_end_date'],
            gift          : TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getAuctionEndDate(): int
    {
        return $this->auctionEndDate;
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function setAuctionEndDate(int $value): static
    {
        $this->auctionEndDate = $value;

        return $this;
    }

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'auction_end_date' => $this->auctionEndDate,
            'gift'             => $this->gift->jsonSerialize(),
        ];
    }
}
