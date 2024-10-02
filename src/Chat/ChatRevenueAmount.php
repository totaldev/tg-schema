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
    public const TYPE_NAME = 'chatRevenueAmount';

    public function __construct(
        /**
         * Cryptocurrency in which revenue is calculated.
         */
        protected string $cryptocurrency,
        /**
         * Total amount of the cryptocurrency earned, in the smallest units of the cryptocurrency.
         */
        protected int    $totalAmount,
        /**
         * Amount of the cryptocurrency that isn't withdrawn yet, in the smallest units of the cryptocurrency.
         */
        protected int    $balanceAmount,
        /**
         * Amount of the cryptocurrency available for withdrawal, in the smallest units of the cryptocurrency.
         */
        protected int    $availableAmount,
        /**
         * True, if Telegram Stars can be withdrawn now or later.
         */
        protected bool   $withdrawalEnabled,
    ) {}

    public static function fromArray(array $array): ChatRevenueAmount
    {
        return new static(
            $array['cryptocurrency'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'cryptocurrency'     => $this->cryptocurrency,
            'total_amount'       => $this->totalAmount,
            'balance_amount'     => $this->balanceAmount,
            'available_amount'   => $this->availableAmount,
            'withdrawal_enabled' => $this->withdrawalEnabled,
        ];
    }
}
