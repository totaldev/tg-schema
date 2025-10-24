<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about Toncoins earned by the current user.
 */
class TonRevenueStatus extends TdObject
{
    public const string TYPE_NAME = 'tonRevenueStatus';

    public function __construct(
        /**
         * Total amount of Toncoins earned; in the smallest units of the cryptocurrency.
         */
        protected int  $totalAmount,
        /**
         * Amount of Toncoins that aren't withdrawn yet; in the smallest units of the cryptocurrency.
         */
        protected int  $balanceAmount,
        /**
         * Amount of Toncoins that are available for withdrawal; in the smallest units of the cryptocurrency.
         */
        protected int  $availableAmount,
        /**
         * True, if Toncoins can be withdrawn.
         */
        protected bool $withdrawalEnabled,
    ) {}

    public static function fromArray(array $array): TonRevenueStatus
    {
        return new static(
            $array['total_amount'],
            $array['balance_amount'],
            $array['available_amount'],
            $array['withdrawal_enabled'],
        );
    }

    public function getAvailableAmount(): int
    {
        return $this->availableAmount;
    }

    public function getBalanceAmount(): int
    {
        return $this->balanceAmount;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getWithdrawalEnabled(): bool
    {
        return $this->withdrawalEnabled;
    }

    public function setAvailableAmount(int $value): static
    {
        $this->availableAmount = $value;

        return $this;
    }

    public function setBalanceAmount(int $value): static
    {
        $this->balanceAmount = $value;

        return $this;
    }

    public function setTotalAmount(int $value): static
    {
        $this->totalAmount = $value;

        return $this;
    }

    public function setWithdrawalEnabled(bool $value): static
    {
        $this->withdrawalEnabled = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'total_amount'       => $this->totalAmount,
            'balance_amount'     => $this->balanceAmount,
            'available_amount'   => $this->availableAmount,
            'withdrawal_enabled' => $this->withdrawalEnabled,
        ];
    }
}
