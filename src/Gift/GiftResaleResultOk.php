<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

/**
 * Operation was successfully completed.
 */
class GiftResaleResultOk extends GiftResaleResult
{
    public const string TYPE_NAME = 'giftResaleResultOk';

    public function __construct(
        /**
         * Unique identifier of the received gift; only for the gifts sent to the current user.
         */
        protected string $receivedGiftId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftResaleResultOk
    {
        return new static(
            receivedGiftId: $array['received_gift_id'],
        );
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'received_gift_id' => $this->receivedGiftId,
        ];
    }
}
