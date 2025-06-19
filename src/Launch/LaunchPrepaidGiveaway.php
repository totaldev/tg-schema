<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Launch;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Launches a prepaid giveaway.
 */
class LaunchPrepaidGiveaway extends TdFunction
{
    public const TYPE_NAME = 'launchPrepaidGiveaway';

    public function __construct(
        /**
         * Unique identifier of the prepaid giveaway.
         */
        protected int                $giveawayId,
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
        /**
         * The number of users to receive giveaway prize.
         */
        protected int                $winnerCount,
        /**
         * The number of Telegram Stars to be distributed through the giveaway; pass 0 for Telegram Premium giveaways.
         */
        protected int                $starCount
    ) {}

    public static function fromArray(array $array): LaunchPrepaidGiveaway
    {
        return new static(
            $array['giveaway_id'],
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['winner_count'],
            $array['star_count'],
        );
    }

    public function getGiveawayId(): int
    {
        return $this->giveawayId;
    }

    public function getParameters(): GiveawayParameters
    {
        return $this->parameters;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'giveaway_id'  => $this->giveawayId,
            'parameters'   => $this->parameters->typeSerialize(),
            'winner_count' => $this->winnerCount,
            'star_count'   => $this->starCount,
        ];
    }
}
