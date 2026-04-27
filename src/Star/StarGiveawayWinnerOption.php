<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes an option for the number of winners of a Telegram Star giveaway.
 */
class StarGiveawayWinnerOption extends TdObject
{
    public const string TYPE_NAME = 'starGiveawayWinnerOption';

    public function __construct(
        /**
         * True, if the option must be chosen by default.
         */
        protected bool $isDefault,
        /**
         * The number of users that will be chosen as winners.
         */
        protected int  $winnerCount,
        /**
         * The number of Telegram Stars that will be won by the winners of the giveaway.
         */
        protected int  $wonStarCount,
    ) {}

    public static function fromArray(array $array): StarGiveawayWinnerOption
    {
        return new static(
            isDefault   : $array['is_default'],
            winnerCount : $array['winner_count'],
            wonStarCount: $array['won_star_count'],
        );
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function getWonStarCount(): int
    {
        return $this->wonStarCount;
    }

    public function setIsDefault(bool $value): static
    {
        $this->isDefault = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function setWonStarCount(int $value): static
    {
        $this->wonStarCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'is_default'     => $this->isDefault,
            'winner_count'   => $this->winnerCount,
            'won_star_count' => $this->wonStarCount,
        ];
    }
}
