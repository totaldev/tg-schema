<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a transaction changing the amount of owned Toncoins.
 */
class TonTransaction extends TdObject
{
    public const string TYPE_NAME = 'tonTransaction';

    public function __construct(
        /**
         * Unique identifier of the transaction.
         */
        protected string             $id,
        /**
         * The amount of added owned Toncoins; negative for outgoing transactions.
         */
        protected int                $tonAmount,
        /**
         * True, if the transaction is a refund of a previous transaction.
         */
        protected bool               $isRefund,
        /**
         * Point in time (Unix timestamp) when the transaction was completed.
         */
        protected int                $date,
        /**
         * Type of the transaction.
         */
        protected TonTransactionType $type,
    ) {}

    public static function fromArray(array $array): TonTransaction
    {
        return new static(
            $array['id'],
            $array['ton_amount'],
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

    public function getTonAmount(): int
    {
        return $this->tonAmount;
    }

    public function getType(): TonTransactionType
    {
        return $this->type;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsRefund(bool $value): static
    {
        $this->isRefund = $value;

        return $this;
    }

    public function setTonAmount(int $value): static
    {
        $this->tonAmount = $value;

        return $this;
    }

    public function setType(TonTransactionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'id'         => $this->id,
            'ton_amount' => $this->tonAmount,
            'is_refund'  => $this->isRefund,
            'date'       => $this->date,
            'type'       => $this->type->typeSerialize(),
        ];
    }
}
