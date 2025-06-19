<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * Describes a gift available for resale.
 */
class GiftForResale extends TdObject
{
    public const TYPE_NAME = 'giftForResale';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift,
        /**
         * Unique identifier of the received gift for the current user; only for the gifts owned by the current user.
         */
        protected string       $receivedGiftId
    ) {}

    public static function fromArray(array $array): GiftForResale
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            $array['received_gift_id'],
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'gift'             => $this->gift->typeSerialize(),
            'received_gift_id' => $this->receivedGiftId,
        ];
    }
}
