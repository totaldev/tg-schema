<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Transaction\TransactionDirection;

/**
 * Returns the list of Toncoin transactions of the current user.
 */
class GetTonTransactions extends TdFunction
{
    public const string TYPE_NAME = 'getTonTransactions';

    public function __construct(
        /**
         * Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                $offset,
        /**
         * The maximum number of transactions to return.
         */
        protected int                   $limit,
        /**
         * Direction of the transactions to receive; pass null to get all transactions.
         */
        protected ?TransactionDirection $direction = null,
    ) {}

    public static function fromArray(array $array): GetTonTransactions
    {
        return new static(
            isset($array['direction']) ? TdSchemaRegistry::fromArray($array['direction']) : null,
            $array['offset'],
            $array['limit'],
        );
    }

    public function getDirection(): ?TransactionDirection
    {
        return $this->direction;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function setDirection(?TransactionDirection $value): static
    {
        $this->direction = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'direction' => $this->direction ?? null,
            'offset'    => $this->offset,
            'limit'     => $this->limit,
        ];
    }
}
