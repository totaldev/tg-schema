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
         * The Toncoin amount that is available for withdrawal; in the smallest units of the cryptocurrency.
         */
        protected int  $availableAmount,
        /**
         * The Toncoin amount that isn't withdrawn yet; in the smallest units of the cryptocurrency.
         */
        protected int  $balanceAmount,
        /**
         * Total Toncoin amount earned; in the smallest units of the cryptocurrency.
         */
        protected int  $totalAmount,
        /**
         * True, if Toncoins can be withdrawn.
         */
        protected bool $withdrawalEnabled,
    ) {}

    public static function fromArray(array $array): TonRevenueStatus
    {
        return new static(
            availableAmount  : $array['available_amount'],
            balanceAmount    : $array['balance_amount'],
            totalAmount      : $array['total_amount'],
            withdrawalEnabled: $array['withdrawal_enabled'],
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
            'available_amount'   => $this->availableAmount,
            'balance_amount'     => $this->balanceAmount,
            'total_amount'       => $this->totalAmount,
            'withdrawal_enabled' => $this->withdrawalEnabled,
        ];
    }
}
