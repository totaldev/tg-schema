<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of Toncoin transactions.
 */
class TonTransactions extends TdObject
{
    public const string TYPE_NAME = 'tonTransactions';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The total amount of owned Toncoins.
         */
        protected int    $tonAmount,
        /**
         * List of Toncoin transactions.
         *
         * @var TonTransaction[]
         */
        protected array  $transactions,
    ) {}

    public static function fromArray(array $array): TonTransactions
    {
        return new static(
            nextOffset  : $array['next_offset'],
            tonAmount   : $array['ton_amount'],
            transactions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['transactions']),
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTonAmount(): int
    {
        return $this->tonAmount;
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

    public function setTonAmount(int $value): static
    {
        $this->tonAmount = $value;

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
            'ton_amount'   => $this->tonAmount,
            'transactions' => array_map(static fn($x) => $x->jsonSerialize(), $this->transactions),
        ];
    }
}
