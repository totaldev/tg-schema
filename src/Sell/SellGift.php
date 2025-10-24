<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sell;

use Totaldev\TgSchema\TdFunction;

/**
 * Sells a gift for Telegram Stars; requires owner privileges for gifts owned by a chat.
 */
class SellGift extends TdFunction
{
    public const string TYPE_NAME = 'sellGift';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string $businessConnectionId,
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId,
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

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
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
