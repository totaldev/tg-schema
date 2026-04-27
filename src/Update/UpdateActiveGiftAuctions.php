<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Gift\GiftAuctionState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of auctions in which participate the current user has changed.
 */
class UpdateActiveGiftAuctions extends Update
{
    public const string TYPE_NAME = 'updateActiveGiftAuctions';

    public function __construct(
        /**
         * New states of the auctions.
         *
         * @var GiftAuctionState[]
         */
        protected array $states
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateActiveGiftAuctions
    {
        return new static(
            states: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['states']),
        );
    }

    public function getStates(): array
    {
        return $this->states;
    }

    public function setStates(array $value): static
    {
        $this->states = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'states' => array_map(static fn($x) => $x->jsonSerialize(), $this->states),
        ];
    }
}
