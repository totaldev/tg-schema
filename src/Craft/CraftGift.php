<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

use Totaldev\TgSchema\TdFunction;

/**
 * Crafts a new gift from other gifts that will be permanently lost.
 */
class CraftGift extends TdFunction
{
    public const string TYPE_NAME = 'craftGift';

    public function __construct(
        /**
         * Identifier of the gifts to use for crafting. In the case of a successful craft, the resulting gift will have the number of the first gift. Consequently, the first gift must not have been withdrawn to the TON blockchain as an NFT and must have an empty gift_address.
         *
         * @var string[]
         */
        protected array $receivedGiftIds
    ) {}

    public static function fromArray(array $array): CraftGift
    {
        return new static(
            receivedGiftIds: $array['received_gift_ids'],
        );
    }

    public function getReceivedGiftIds(): array
    {
        return $this->receivedGiftIds;
    }

    public function setReceivedGiftIds(array $value): static
    {
        $this->receivedGiftIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'received_gift_ids' => $this->receivedGiftIds,
        ];
    }
}
