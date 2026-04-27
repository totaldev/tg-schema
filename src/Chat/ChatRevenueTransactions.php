<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat revenue transactions.
 */
class ChatRevenueTransactions extends TdObject
{
    public const string TYPE_NAME = 'chatRevenueTransactions';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The amount of owned Toncoins; in the smallest units of the cryptocurrency.
         */
        protected int    $tonAmount,
        /**
         * List of transactions.
         *
         * @var ChatRevenueTransaction[]
         */
        protected array  $transactions,
    ) {}

    public static function fromArray(array $array): ChatRevenueTransactions
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
