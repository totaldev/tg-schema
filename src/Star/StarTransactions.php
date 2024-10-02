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
    public const TYPE_NAME = 'starTransactions';

    public function __construct(
        /**
         * The amount of owned Telegram Stars.
         */
        protected int    $starCount,
        /**
         * List of transactions with Telegram Stars.
         *
         * @var StarTransaction[]
         */
        protected array  $transactions,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
    ) {}

    public static function fromArray(array $array): StarTransactions
    {
        return new static(
            $array['star_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['transactions']),
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'star_count'  => $this->starCount,
            array_map(fn($x) => $x->typeSerialize(), $this->transactions),
            'next_offset' => $this->nextOffset,
        ];
    }
}
