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
    public const TYPE_NAME = 'starGiveawayWinnerOption';

    public function __construct(
        /**
         * The number of users that will be chosen as winners.
         */
        protected int  $winnerCount,
        /**
         * The number of Telegram Stars that will be won by the winners of the giveaway.
         */
        protected int  $wonStarCount,
        /**
         * True, if the option must be chosen by default.
         */
        protected bool $isDefault
    ) {}

    public static function fromArray(array $array): StarGiveawayWinnerOption
    {
        return new static(
            $array['winner_count'],
            $array['won_star_count'],
            $array['is_default'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'winner_count'   => $this->winnerCount,
            'won_star_count' => $this->wonStarCount,
            'is_default'     => $this->isDefault,
        ];
    }
}
