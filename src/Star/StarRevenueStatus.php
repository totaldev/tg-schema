<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about Telegram Stars earned by a bot or a chat.
 */
class StarRevenueStatus extends TdObject
{
    public const TYPE_NAME = 'starRevenueStatus';

    public function __construct(
        /**
         * Total amount of Telegram Stars earned.
         */
        protected StarAmount $totalAmount,
        /**
         * The amount of Telegram Stars that aren't withdrawn yet.
         */
        protected StarAmount $currentAmount,
        /**
         * The amount of Telegram Stars that are available for withdrawal.
         */
        protected StarAmount $availableAmount,
        /**
         * True, if Telegram Stars can be withdrawn now or later.
         */
        protected bool       $withdrawalEnabled,
        /**
         * Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now.
         */
        protected int        $nextWithdrawalIn,
    ) {}

    public static function fromArray(array $array): StarRevenueStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['total_amount']),
            TdSchemaRegistry::fromArray($array['current_amount']),
            TdSchemaRegistry::fromArray($array['available_amount']),
            $array['withdrawal_enabled'],
            $array['next_withdrawal_in'],
        );
    }

    public function getAvailableAmount(): StarAmount
    {
        return $this->availableAmount;
    }

    public function getCurrentAmount(): StarAmount
    {
        return $this->currentAmount;
    }

    public function getNextWithdrawalIn(): int
    {
        return $this->nextWithdrawalIn;
    }

    public function getTotalAmount(): StarAmount
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
            'total_amount'       => $this->totalAmount->typeSerialize(),
            'current_amount'     => $this->currentAmount->typeSerialize(),
            'available_amount'   => $this->availableAmount->typeSerialize(),
            'withdrawal_enabled' => $this->withdrawalEnabled,
            'next_withdrawal_in' => $this->nextWithdrawalIn,
        ];
    }
}
