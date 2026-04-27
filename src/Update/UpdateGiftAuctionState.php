<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Gift\GiftAuctionState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * State of a gift auction was updated.
 */
class UpdateGiftAuctionState extends Update
{
    public const string TYPE_NAME = 'updateGiftAuctionState';

    public function __construct(
        /**
         * New state of the auction.
         */
        protected GiftAuctionState $state
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGiftAuctionState
    {
        return new static(
            state: TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getState(): GiftAuctionState
    {
        return $this->state;
    }

    public function setState(GiftAuctionState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'state' => $this->state->jsonSerialize(),
        ];
    }
}
