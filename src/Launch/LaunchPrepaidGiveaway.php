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
    public const string TYPE_NAME = 'launchPrepaidGiveaway';

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
         * The number of Telegram Stars to be distributed through the giveaway; pass 0 for Telegram Premium giveaways.
         */
        protected int                $starCount,
        /**
         * The number of users to receive giveaway prize.
         */
        protected int                $winnerCount,
    ) {}

    public static function fromArray(array $array): LaunchPrepaidGiveaway
    {
        return new static(
            giveawayId : $array['giveaway_id'],
            parameters : TdSchemaRegistry::fromArray($array['parameters']),
            starCount  : $array['star_count'],
            winnerCount: $array['winner_count'],
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

    public function setGiveawayId(int $value): static
    {
        $this->giveawayId = $value;

        return $this;
    }

    public function setParameters(GiveawayParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

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
            'giveaway_id'  => $this->giveawayId,
            'parameters'   => $this->parameters->jsonSerialize(),
            'star_count'   => $this->starCount,
            'winner_count' => $this->winnerCount,
        ];
    }
}
