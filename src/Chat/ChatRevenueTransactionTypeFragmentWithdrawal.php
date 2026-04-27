<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Revenue\RevenueWithdrawalState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a withdrawal of earnings through Fragment.
 */
class ChatRevenueTransactionTypeFragmentWithdrawal extends ChatRevenueTransactionType
{
    public const string TYPE_NAME = 'chatRevenueTransactionTypeFragmentWithdrawal';

    public function __construct(
        /**
         * State of the withdrawal.
         */
        protected RevenueWithdrawalState $state,
        /**
         * Point in time (Unix timestamp) when the earnings withdrawal started.
         */
        protected int                    $withdrawalDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatRevenueTransactionTypeFragmentWithdrawal
    {
        return new static(
            state         : TdSchemaRegistry::fromArray($array['state']),
            withdrawalDate: $array['withdrawal_date'],
        );
    }

    public function getState(): RevenueWithdrawalState
    {
        return $this->state;
    }

    public function getWithdrawalDate(): int
    {
        return $this->withdrawalDate;
    }

    public function setState(RevenueWithdrawalState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function setWithdrawalDate(int $value): static
    {
        $this->withdrawalDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'state'           => $this->state->jsonSerialize(),
            'withdrawal_date' => $this->withdrawalDate,
        ];
    }
}
