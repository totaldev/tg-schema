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
    public const TYPE_NAME = 'prepaidGiveaway';

    public function __construct(
        /**
         * Unique identifier of the prepaid giveaway.
         */
        protected int           $id,
        /**
         * Number of users which will receive giveaway prize.
         */
        protected int           $winnerCount,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize $prize,
        /**
         * The number of boosts received by the chat from the giveaway; for Telegram Star giveaways only.
         */
        protected int           $boostCount,
        /**
         * Point in time (Unix timestamp) when the giveaway was paid.
         */
        protected int           $paymentDate,
    ) {}

    public static function fromArray(array $array): PrepaidGiveaway
    {
        return new static(
            $array['id'],
            $array['winner_count'],
            TdSchemaRegistry::fromArray($array['prize']),
            $array['boost_count'],
            $array['payment_date'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'winner_count' => $this->winnerCount,
            'prize'        => $this->prize->typeSerialize(),
            'boost_count'  => $this->boostCount,
            'payment_date' => $this->paymentDate,
        ];
    }
}
