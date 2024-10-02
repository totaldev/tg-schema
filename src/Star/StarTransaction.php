<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a transaction changing the amount of owned Telegram Stars.
 */
class StarTransaction extends TdObject
{
    public const TYPE_NAME = 'starTransaction';

    public function __construct(
        /**
         * Unique identifier of the transaction.
         */
        protected string                 $id,
        /**
         * The amount of added owned Telegram Stars; negative for outgoing transactions.
         */
        protected int                    $starCount,
        /**
         * True, if the transaction is a refund of a previous transaction.
         */
        protected bool                   $isRefund,
        /**
         * Point in time (Unix timestamp) when the transaction was completed.
         */
        protected int                    $date,
        /**
         * Source of the incoming transaction, or its recipient for outgoing transactions.
         */
        protected StarTransactionPartner $partner,
    ) {}

    public static function fromArray(array $array): StarTransaction
    {
        return new static(
            $array['id'],
            $array['star_count'],
            $array['is_refund'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['partner']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsRefund(): bool
    {
        return $this->isRefund;
    }

    public function getPartner(): StarTransactionPartner
    {
        return $this->partner;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'star_count' => $this->starCount,
            'is_refund'  => $this->isRefund,
            'date'       => $this->date,
            'partner'    => $this->partner->typeSerialize(),
        ];
    }
}
