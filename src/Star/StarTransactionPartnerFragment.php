<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Revenue\RevenueWithdrawalState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a transaction with Fragment.
 */
class StarTransactionPartnerFragment extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerFragment';

    public function __construct(
        /**
         * State of the withdrawal; may be null for refunds from Fragment.
         */
        protected ?RevenueWithdrawalState $withdrawalState
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerFragment
    {
        return new static(
            isset($array['withdrawal_state']) ? TdSchemaRegistry::fromArray($array['withdrawal_state']) : null,
        );
    }

    public function getWithdrawalState(): ?RevenueWithdrawalState
    {
        return $this->withdrawalState;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'withdrawal_state' => (isset($this->withdrawalState) ? $this->withdrawalState : null),
        ];
    }
}
