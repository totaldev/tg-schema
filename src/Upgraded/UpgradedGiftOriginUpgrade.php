<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The gift was obtained by upgrading of a previously received gift.
 */
class UpgradedGiftOriginUpgrade extends UpgradedGiftOrigin
{
    public const string TYPE_NAME = 'upgradedGiftOriginUpgrade';

    public function __construct(
        /**
         * Identifier of the message with the regular gift that was upgraded; can be 0 or an identifier of a deleted message.
         */
        protected int $giftMessageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginUpgrade
    {
        return new static(
            giftMessageId: $array['gift_message_id'],
        );
    }

    public function getGiftMessageId(): int
    {
        return $this->giftMessageId;
    }

    public function setGiftMessageId(int $value): static
    {
        $this->giftMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'gift_message_id' => $this->giftMessageId,
        ];
    }
}
