<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about Telegram Stars earned by a user or a chat.
 */
class StarRevenueStatus extends TdObject
{
    public const string TYPE_NAME = 'starRevenueStatus';

    public function __construct(
        /**
         * The amount of Telegram Stars that are available for withdrawal.
         */
        protected StarAmount $availableAmount,
        /**
         * The amount of Telegram Stars that aren't withdrawn yet.
         */
        protected StarAmount $currentAmount,
        /**
         * Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now.
         */
        protected int        $nextWithdrawalIn,
        /**
         * Total amount of Telegram Stars earned.
         */
        protected StarAmount $totalAmount,
        /**
         * True, if Telegram Stars can be withdrawn now or later.
         */
        protected bool       $withdrawalEnabled,
    ) {}

    public static function fromArray(array $array): StarRevenueStatus
    {
        return new static(
            availableAmount  : TdSchemaRegistry::fromArray($array['available_amount']),
            currentAmount    : TdSchemaRegistry::fromArray($array['current_amount']),
            nextWithdrawalIn : $array['next_withdrawal_in'],
            totalAmount      : TdSchemaRegistry::fromArray($array['total_amount']),
            withdrawalEnabled: $array['withdrawal_enabled'],
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

    public function setAvailableAmount(StarAmount $value): static
    {
        $this->availableAmount = $value;

        return $this;
    }

    public function setCurrentAmount(StarAmount $value): static
    {
        $this->currentAmount = $value;

        return $this;
    }

    public function setNextWithdrawalIn(int $value): static
    {
        $this->nextWithdrawalIn = $value;

        return $this;
    }

    public function setTotalAmount(StarAmount $value): static
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
            'available_amount'   => $this->availableAmount->jsonSerialize(),
            'current_amount'     => $this->currentAmount->jsonSerialize(),
            'next_withdrawal_in' => $this->nextWithdrawalIn,
            'total_amount'       => $this->totalAmount->jsonSerialize(),
            'withdrawal_enabled' => $this->withdrawalEnabled,
        ];
    }
}
