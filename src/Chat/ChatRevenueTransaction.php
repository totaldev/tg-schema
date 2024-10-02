<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a chat revenue transactions.
 */
class ChatRevenueTransaction extends TdObject
{
    public const TYPE_NAME = 'chatRevenueTransaction';

    public function __construct(
        /**
         * Cryptocurrency in which revenue is calculated.
         */
        protected string                     $cryptocurrency,
        /**
         * The withdrawn amount, in the smallest units of the cryptocurrency.
         */
        protected int                        $cryptocurrencyAmount,
        /**
         * Type of the transaction.
         */
        protected ChatRevenueTransactionType $type,
    ) {}

    public static function fromArray(array $array): ChatRevenueTransaction
    {
        return new static(
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    public function getType(): ChatRevenueTransactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'type'                  => $this->type->typeSerialize(),
        ];
    }
}
