<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a gift auction. Call getGiftAuctionState with the given auction identifier to process the link.
 */
class InternalLinkTypeGiftAuction extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeGiftAuction';

    public function __construct(
        /**
         * Unique identifier of the auction.
         */
        protected string $auctionId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeGiftAuction
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
