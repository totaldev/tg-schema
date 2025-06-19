<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sell;

use Totaldev\TgSchema\TdFunction;

/**
 * Sells a gift for Telegram Stars.
 */
class SellGift extends TdFunction
{
    public const TYPE_NAME = 'sellGift';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string $businessConnectionId,
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId
    ) {}

    public static function fromArray(array $array): SellGift
    {
        return new static(
            $array['business_connection_id'],
            $array['received_gift_id'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'received_gift_id'       => $this->receivedGiftId,
        ];
    }
}
