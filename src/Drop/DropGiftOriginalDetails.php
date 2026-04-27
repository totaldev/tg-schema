<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Drop;

use Totaldev\TgSchema\TdFunction;

/**
 * Drops original details for an upgraded gift.
 */
class DropGiftOriginalDetails extends TdFunction
{
    public const string TYPE_NAME = 'dropGiftOriginalDetails';

    public function __construct(
        /**
         * Identifier of the gift.
         */
        protected string $receivedGiftId,
        /**
         * The Telegram Star amount required to pay for the operation.
         */
        protected int    $starCount,
    ) {}

    public static function fromArray(array $array): DropGiftOriginalDetails
    {
        return new static(
            receivedGiftId: $array['received_gift_id'],
            starCount     : $array['star_count'],
        );
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'received_gift_id' => $this->receivedGiftId,
            'star_count'       => $this->starCount,
        ];
    }
}
