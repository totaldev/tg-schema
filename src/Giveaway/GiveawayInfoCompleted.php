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
    public const string TYPE_NAME = 'giveawayInfoCompleted';

    public function __construct(
        /**
         * Number of winners, which activated their gift codes; for Telegram Premium giveaways only.
         */
        protected int    $activationCount,
        /**
         * Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway.
         */
        protected int    $actualWinnersSelectionDate,
        /**
         * Point in time (Unix timestamp) when the giveaway was created.
         */
        protected int    $creationDate,
        /**
         * Telegram Premium gift code that was received by the current user; empty if the user isn't a winner in the giveaway or the giveaway isn't a Telegram Premium giveaway.
         */
        protected string $giftCode,
        /**
         * True, if the current user is a winner of the giveaway.
         */
        protected bool   $isWinner,
        /**
         * True, if the giveaway was canceled and was fully refunded.
         */
        protected bool   $wasRefunded,
        /**
         * Number of winners in the giveaway.
         */
        protected int    $winnerCount,
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
            activationCount           : $array['activation_count'],
            actualWinnersSelectionDate: $array['actual_winners_selection_date'],
            creationDate              : $array['creation_date'],
            giftCode                  : $array['gift_code'],
            isWinner                  : $array['is_winner'],
            wasRefunded               : $array['was_refunded'],
            winnerCount               : $array['winner_count'],
            wonStarCount              : $array['won_star_count'],
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

    public function setActivationCount(int $value): static
    {
        $this->activationCount = $value;

        return $this;
    }

    public function setActualWinnersSelectionDate(int $value): static
    {
        $this->actualWinnersSelectionDate = $value;

        return $this;
    }

    public function setCreationDate(int $value): static
    {
        $this->creationDate = $value;

        return $this;
    }

    public function setGiftCode(string $value): static
    {
        $this->giftCode = $value;

        return $this;
    }

    public function setIsWinner(bool $value): static
    {
        $this->isWinner = $value;

        return $this;
    }

    public function setWasRefunded(bool $value): static
    {
        $this->wasRefunded = $value;

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
            '@type'                         => static::TYPE_NAME,
            'activation_count'              => $this->activationCount,
            'actual_winners_selection_date' => $this->actualWinnersSelectionDate,
            'creation_date'                 => $this->creationDate,
            'gift_code'                     => $this->giftCode,
            'is_winner'                     => $this->isWinner,
            'was_refunded'                  => $this->wasRefunded,
            'winner_count'                  => $this->winnerCount,
            'won_star_count'                => $this->wonStarCount,
        ];
    }
}
