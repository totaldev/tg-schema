<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of Telegram Star transactions.
 */
class StarTransactions extends TdObject
{
    public const string TYPE_NAME = 'starTransactions';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string     $nextOffset,
        /**
         * The amount of owned Telegram Stars.
         */
        protected StarAmount $starAmount,
        /**
         * List of transactions with Telegram Stars.
         *
         * @var StarTransaction[]
         */
        protected array      $transactions,
    ) {}

    public static function fromArray(array $array): StarTransactions
    {
        return new static(
            nextOffset  : $array['next_offset'],
            starAmount  : TdSchemaRegistry::fromArray($array['star_amount']),
            transactions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['transactions']),
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setStarAmount(StarAmount $value): static
    {
        $this->starAmount = $value;

        return $this;
    }

    public function setTransactions(array $value): static
    {
        $this->transactions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'next_offset'  => $this->nextOffset,
            'star_amount'  => $this->starAmount->jsonSerialize(),
            'transactions' => array_map(static fn($x) => $x->jsonSerialize(), $this->transactions),
        ];
    }
}
