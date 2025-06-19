<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transfer;

use Totaldev\TgSchema\TdFunction;

/**
 * Transfer Telegram Stars from the business account to the business bot; for bots only.
 */
class TransferBusinessAccountStars extends TdFunction
{
    public const TYPE_NAME = 'transferBusinessAccountStars';

    public function __construct(
        /**
         * Unique identifier of business connection.
         */
        protected string $businessConnectionId,
        /**
         * Number of Telegram Stars to transfer.
         */
        protected int    $starCount
    ) {}

    public static function fromArray(array $array): TransferBusinessAccountStars
    {
        return new static(
            $array['business_connection_id'],
            $array['star_count'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'star_count'             => $this->starCount,
        ];
    }
}
