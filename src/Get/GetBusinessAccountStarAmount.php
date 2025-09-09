<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the amount of Telegram Stars owned by a business account; for bots only.
 */
class GetBusinessAccountStarAmount extends TdFunction
{
    public const TYPE_NAME = 'getBusinessAccountStarAmount';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId
    ) {}

    public static function fromArray(array $array): GetBusinessAccountStarAmount
    {
        return new static(
            $array['business_connection_id'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
        ];
    }
}
