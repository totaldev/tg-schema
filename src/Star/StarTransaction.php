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
        protected string              $id,
        /**
         * The amount of added owned Telegram Stars; negative for outgoing transactions.
         */
        protected StarAmount          $starAmount,
        /**
         * True, if the transaction is a refund of a previous transaction.
         */
        protected bool                $isRefund,
        /**
         * Point in time (Unix timestamp) when the transaction was completed.
         */
        protected int                 $date,
        /**
         * Type of the transaction.
         */
        protected StarTransactionType $type,
    ) {}

    public static function fromArray(array $array): StarTransaction
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['star_amount']),
            $array['is_refund'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function getType(): StarTransactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'star_amount' => $this->starAmount->typeSerialize(),
            'is_refund'   => $this->isRefund,
            'date'        => $this->date,
            'type'        => $this->type->typeSerialize(),
        ];
    }
}
