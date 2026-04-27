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
    public const string TYPE_NAME = 'starTransaction';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the transaction was completed.
         */
        protected int                 $date,
        /**
         * Unique identifier of the transaction.
         */
        protected string              $id,
        /**
         * True, if the transaction is a refund of a previous transaction.
         */
        protected bool                $isRefund,
        /**
         * The amount of added owned Telegram Stars; negative for outgoing transactions.
         */
        protected StarAmount          $starAmount,
        /**
         * Type of the transaction.
         */
        protected StarTransactionType $type,
    ) {}

    public static function fromArray(array $array): StarTransaction
    {
        return new static(
            date      : $array['date'],
            id        : $array['id'],
            isRefund  : $array['is_refund'],
            starAmount: TdSchemaRegistry::fromArray($array['star_amount']),
            type      : TdSchemaRegistry::fromArray($array['type']),
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

    public function setStarAmount(StarAmount $value): static
    {
        $this->starAmount = $value;

        return $this;
    }

    public function setType(StarTransactionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'date'        => $this->date,
            'id'          => $this->id,
            'is_refund'   => $this->isRefund,
            'star_amount' => $this->starAmount->jsonSerialize(),
            'type'        => $this->type->jsonSerialize(),
        ];
    }
}
