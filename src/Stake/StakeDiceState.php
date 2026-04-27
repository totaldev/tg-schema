<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Stake;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of the stake dice.
 */
class StakeDiceState extends TdObject
{
    public const string TYPE_NAME = 'stakeDiceState';

    public function __construct(
        /**
         * The number of rolled sixes towards the streak; 0-2.
         */
        protected int    $currentStreak,
        /**
         * The number of Toncoins received by the user for each 1000 Toncoins staked if the dice outcome is 1-6 correspondingly; may be empty if the stake dice can't be sent by the current user.
         *
         * @var int[]
         */
        protected array  $prizePerMille,
        /**
         * The Toncoin amount that was staked in the previous roll; in the smallest units of the currency.
         */
        protected int    $stakeToncoinAmount,
        /**
         * Hash of the state to use for sending the next dice; may be empty if the stake dice can't be sent by the current user.
         */
        protected string $stateHash,
        /**
         * The number of Toncoins received by the user for each 1000 Toncoins staked if the dice outcome is 6 three times in a row with the same stake.
         */
        protected int    $streakPrizePerMille,
        /**
         * The amounts of Toncoins that are suggested to be staked; in the smallest units of the currency.
         *
         * @var int[]
         */
        protected array  $suggestedStakeToncoinAmounts,
    ) {}

    public static function fromArray(array $array): StakeDiceState
    {
        return new static(
            currentStreak               : $array['current_streak'],
            prizePerMille               : $array['prize_per_mille'],
            stakeToncoinAmount          : $array['stake_toncoin_amount'],
            stateHash                   : $array['state_hash'],
            streakPrizePerMille         : $array['streak_prize_per_mille'],
            suggestedStakeToncoinAmounts: $array['suggested_stake_toncoin_amounts'],
        );
    }

    public function getCurrentStreak(): int
    {
        return $this->currentStreak;
    }

    public function getPrizePerMille(): array
    {
        return $this->prizePerMille;
    }

    public function getStakeToncoinAmount(): int
    {
        return $this->stakeToncoinAmount;
    }

    public function getStateHash(): string
    {
        return $this->stateHash;
    }

    public function getStreakPrizePerMille(): int
    {
        return $this->streakPrizePerMille;
    }

    public function getSuggestedStakeToncoinAmounts(): array
    {
        return $this->suggestedStakeToncoinAmounts;
    }

    public function setCurrentStreak(int $value): static
    {
        $this->currentStreak = $value;

        return $this;
    }

    public function setPrizePerMille(array $value): static
    {
        $this->prizePerMille = $value;

        return $this;
    }

    public function setStakeToncoinAmount(int $value): static
    {
        $this->stakeToncoinAmount = $value;

        return $this;
    }

    public function setStateHash(string $value): static
    {
        $this->stateHash = $value;

        return $this;
    }

    public function setStreakPrizePerMille(int $value): static
    {
        $this->streakPrizePerMille = $value;

        return $this;
    }

    public function setSuggestedStakeToncoinAmounts(array $value): static
    {
        $this->suggestedStakeToncoinAmounts = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'current_streak'                  => $this->currentStreak,
            'prize_per_mille'                 => $this->prizePerMille,
            'stake_toncoin_amount'            => $this->stakeToncoinAmount,
            'state_hash'                      => $this->stateHash,
            'streak_prize_per_mille'          => $this->streakPrizePerMille,
            'suggested_stake_toncoin_amounts' => $this->suggestedStakeToncoinAmounts,
        ];
    }
}
