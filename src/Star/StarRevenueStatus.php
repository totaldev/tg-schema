<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about Telegram Stars earned by a bot or a chat.
 */
class StarRevenueStatus extends TdObject
{
    public const TYPE_NAME = 'starRevenueStatus';

    public function __construct(
        /**
         * Total number of Telegram Stars earned.
         */
        protected int  $totalCount,
        /**
         * The number of Telegram Stars that aren't withdrawn yet.
         */
        protected int  $currentCount,
        /**
         * The number of Telegram Stars that are available for withdrawal.
         */
        protected int  $availableCount,
        /**
         * True, if Telegram Stars can be withdrawn now or later.
         */
        protected bool $withdrawalEnabled,
        /**
         * Time left before the next withdrawal can be started, in seconds; 0 if withdrawal can be started now.
         */
        protected int  $nextWithdrawalIn,
    ) {}

    public static function fromArray(array $array): StarRevenueStatus
    {
        return new static(
            $array['total_count'],
            $array['current_count'],
            $array['available_count'],
            $array['withdrawal_enabled'],
            $array['next_withdrawal_in'],
        );
    }

    public function getAvailableCount(): int
    {
        return $this->availableCount;
    }

    public function getCurrentCount(): int
    {
        return $this->currentCount;
    }

    public function getNextWithdrawalIn(): int
    {
        return $this->nextWithdrawalIn;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getWithdrawalEnabled(): bool
    {
        return $this->withdrawalEnabled;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'total_count'        => $this->totalCount,
            'current_count'      => $this->currentCount,
            'available_count'    => $this->availableCount,
            'withdrawal_enabled' => $this->withdrawalEnabled,
            'next_withdrawal_in' => $this->nextWithdrawalIn,
        ];
    }
}
