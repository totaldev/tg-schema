<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about revenue earned from sponsored messages in a chat.
 */
class ChatRevenueAmount extends TdObject
{
    public const string TYPE_NAME = 'chatRevenueAmount';

    public function __construct(
        /**
         * Amount of the cryptocurrency available for withdrawal, in the smallest units of the cryptocurrency.
         */
        protected int    $availableAmount,
        /**
         * Amount of the cryptocurrency that isn't withdrawn yet, in the smallest units of the cryptocurrency.
         */
        protected int    $balanceAmount,
        /**
         * Cryptocurrency in which revenue is calculated.
         */
        protected string $cryptocurrency,
        /**
         * Total amount of the cryptocurrency earned, in the smallest units of the cryptocurrency.
         */
        protected int    $totalAmount,
        /**
         * True, if Telegram Stars can be withdrawn now or later.
         */
        protected bool   $withdrawalEnabled,
    ) {}

    public static function fromArray(array $array): ChatRevenueAmount
    {
        return new static(
            availableAmount  : $array['available_amount'],
            balanceAmount    : $array['balance_amount'],
            cryptocurrency   : $array['cryptocurrency'],
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

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
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

    public function setCryptocurrency(string $value): static
    {
        $this->cryptocurrency = $value;

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
            'cryptocurrency'     => $this->cryptocurrency,
            'total_amount'       => $this->totalAmount,
            'withdrawal_enabled' => $this->withdrawalEnabled,
        ];
    }
}
