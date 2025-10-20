<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a gift with next_send_date in the future can be sent already.
 */
class CanSendGift extends TdFunction
{
    public const TYPE_NAME = 'canSendGift';

    public function __construct(
        /**
         * Identifier of the gift to send.
         */
        protected int $giftId
    ) {}

    public static function fromArray(array $array): CanSendGift
    {
        return new static(
            $array['gift_id'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'gift_id' => $this->giftId,
        ];
    }
}
