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
    public const TYPE_NAME = 'chatRevenueTransactions';

    public function __construct(
        /**
         * Total number of transactions.
         */
        protected int   $totalCount,
        /**
         * List of transactions.
         *
         * @var ChatRevenueTransaction[]
         */
        protected array $transactions
    ) {}

    public static function fromArray(array $array): ChatRevenueTransactions
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['transactions']),
        );
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->transactions),
        ];
    }
}
