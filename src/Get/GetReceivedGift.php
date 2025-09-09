<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a received gift.
 */
class GetReceivedGift extends TdFunction
{
    public const TYPE_NAME = 'getReceivedGift';

    public function __construct(
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId
    ) {}

    public static function fromArray(array $array): GetReceivedGift
    {
        return new static(
            $array['received_gift_id'],
        );
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'received_gift_id' => $this->receivedGiftId,
        ];
    }
}
