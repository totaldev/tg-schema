<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Revenue\RevenueWithdrawalState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a withdrawal of earnings.
 */
class ChatRevenueTransactionTypeWithdrawal extends ChatRevenueTransactionType
{
    public const TYPE_NAME = 'chatRevenueTransactionTypeWithdrawal';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the earnings withdrawal started.
         */
        protected int                    $withdrawalDate,
        /**
         * Name of the payment provider.
         */
        protected string                 $provider,
        /**
         * State of the withdrawal.
         */
        protected RevenueWithdrawalState $state
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeWithdrawal
    {
        return new static(
            $array['withdrawal_date'],
            $array['provider'],
            TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getState(): RevenueWithdrawalState
    {
        return $this->state;
    }

    public function getWithdrawalDate(): int
    {
        return $this->withdrawalDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'withdrawal_date' => $this->withdrawalDate,
            'provider'        => $this->provider,
            'state'           => $this->state->typeSerialize(),
        ];
    }
}
