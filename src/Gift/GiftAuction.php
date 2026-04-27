<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an auction on which a gift can be purchased.
 */
class GiftAuction extends TdObject
{
    public const string TYPE_NAME = 'giftAuction';

    public function __construct(
        /**
         * Number of gifts distributed in each round.
         */
        protected int    $giftsPerRound,
        /**
         * Identifier of the auction.
         */
        protected string $id,
        /**
         * Point in time (Unix timestamp) when the auction will start.
         */
        protected int    $startDate,
    ) {}

    public static function fromArray(array $array): GiftAuction
    {
        return new static(
            giftsPerRound: $array['gifts_per_round'],
            id           : $array['id'],
            startDate    : $array['start_date'],
        );
    }

    public function getGiftsPerRound(): int
    {
        return $this->giftsPerRound;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStartDate(): int
    {
        return $this->startDate;
    }

    public function setGiftsPerRound(int $value): static
    {
        $this->giftsPerRound = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setStartDate(int $value): static
    {
        $this->startDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'gifts_per_round' => $this->giftsPerRound,
            'id'              => $this->id,
            'start_date'      => $this->startDate,
        ];
    }
}
