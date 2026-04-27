<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Prepaid;

use Totaldev\TgSchema\Giveaway\GiveawayPrize;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a prepaid giveaway.
 */
class PrepaidGiveaway extends TdObject
{
    public const string TYPE_NAME = 'prepaidGiveaway';

    public function __construct(
        /**
         * The number of boosts received by the chat from the giveaway; for Telegram Star giveaways only.
         */
        protected int           $boostCount,
        /**
         * Unique identifier of the prepaid giveaway.
         */
        protected int           $id,
        /**
         * Point in time (Unix timestamp) when the giveaway was paid.
         */
        protected int           $paymentDate,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize $prize,
        /**
         * Number of users which will receive giveaway prize.
         */
        protected int           $winnerCount,
    ) {}

    public static function fromArray(array $array): PrepaidGiveaway
    {
        return new static(
            boostCount : $array['boost_count'],
            id         : $array['id'],
            paymentDate: $array['payment_date'],
            prize      : TdSchemaRegistry::fromArray($array['prize']),
            winnerCount: $array['winner_count'],
        );
    }

    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPaymentDate(): int
    {
        return $this->paymentDate;
    }

    public function getPrize(): GiveawayPrize
    {
        return $this->prize;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function setBoostCount(int $value): static
    {
        $this->boostCount = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setPaymentDate(int $value): static
    {
        $this->paymentDate = $value;

        return $this;
    }

    public function setPrize(GiveawayPrize $value): static
    {
        $this->prize = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'boost_count'  => $this->boostCount,
            'id'           => $this->id,
            'payment_date' => $this->paymentDate,
            'prize'        => $this->prize->jsonSerialize(),
            'winner_count' => $this->winnerCount,
        ];
    }
}
