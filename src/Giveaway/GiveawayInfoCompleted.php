<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * Describes a completed giveaway.
 */
class GiveawayInfoCompleted extends GiveawayInfo
{
    public const TYPE_NAME = 'giveawayInfoCompleted';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the giveaway was created.
         */
        protected int    $creationDate,
        /**
         * Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway.
         */
        protected int    $actualWinnersSelectionDate,
        /**
         * True, if the giveaway was canceled and was fully refunded.
         */
        protected bool   $wasRefunded,
        /**
         * True, if the cuurent user is a winner of the giveaway.
         */
        protected bool   $isWinner,
        /**
         * Number of winners in the giveaway.
         */
        protected int    $winnerCount,
        /**
         * Number of winners, which activated their gift codes; for Telegram Premium giveaways only.
         */
        protected int    $activationCount,
        /**
         * Telegram Premium gift code that was received by the current user; empty if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Premium giveaway.
         */
        protected string $giftCode,
        /**
         * The amount of Telegram Stars won by the current user; 0 if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Star giveaway.
         */
        protected int    $wonStarCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayInfoCompleted
    {
        return new static(
            $array['creation_date'],
            $array['actual_winners_selection_date'],
            $array['was_refunded'],
            $array['is_winner'],
            $array['winner_count'],
            $array['activation_count'],
            $array['gift_code'],
            $array['won_star_count'],
        );
    }

    public function getActivationCount(): int
    {
        return $this->activationCount;
    }

    public function getActualWinnersSelectionDate(): int
    {
        return $this->actualWinnersSelectionDate;
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    public function getIsWinner(): bool
    {
        return $this->isWinner;
    }

    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
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
            '@type'                         => static::TYPE_NAME,
            'creation_date'                 => $this->creationDate,
            'actual_winners_selection_date' => $this->actualWinnersSelectionDate,
            'was_refunded'                  => $this->wasRefunded,
            'is_winner'                     => $this->isWinner,
            'winner_count'                  => $this->winnerCount,
            'activation_count'              => $this->activationCount,
            'gift_code'                     => $this->giftCode,
            'won_star_count'                => $this->wonStarCount,
        ];
    }
}
