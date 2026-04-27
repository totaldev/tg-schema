<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns auction state for a gift.
 */
class GetGiftAuctionState extends TdFunction
{
    public const string TYPE_NAME = 'getGiftAuctionState';

    public function __construct(
        /**
         * Unique identifier of the auction.
         */
        protected string $auctionId
    ) {}

    public static function fromArray(array $array): GetGiftAuctionState
    {
        return new static(
            auctionId: $array['auction_id'],
        );
    }

    public function getAuctionId(): string
    {
        return $this->auctionId;
    }

    public function setAuctionId(string $value): static
    {
        $this->auctionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'auction_id' => $this->auctionId,
        ];
    }
}
