<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Ton\TonRevenueStatus;

/**
 * The Toncoin revenue earned by the current user has changed. If Toncoin transaction screen of the chat is opened, then getTonTransactions may be called to
 * fetch new transactions.
 */
class UpdateTonRevenueStatus extends Update
{
    public const TYPE_NAME = 'updateTonRevenueStatus';

    public function __construct(
        /**
         * New Toncoin revenue status.
         */
        protected TonRevenueStatus $status
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTonRevenueStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function getStatus(): TonRevenueStatus
    {
        return $this->status;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'status' => $this->status->typeSerialize(),
        ];
    }
}
