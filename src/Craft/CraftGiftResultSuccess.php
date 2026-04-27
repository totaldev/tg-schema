<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Craft;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * Crafting was successful.
 */
class CraftGiftResultSuccess extends CraftGiftResult
{
    public const string TYPE_NAME = 'craftGiftResultSuccess';

    public function __construct(
        /**
         * The created gift.
         */
        protected UpgradedGift $gift,
        /**
         * Unique identifier of the received gift for the current user.
         */
        protected string       $receivedGiftId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CraftGiftResultSuccess
    {
        return new static(
            gift          : TdSchemaRegistry::fromArray($array['gift']),
            receivedGiftId: $array['received_gift_id'],
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

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

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
            '@type'            => static::TYPE_NAME,
            'gift'             => $this->gift->jsonSerialize(),
            'received_gift_id' => $this->receivedGiftId,
        ];
    }
}
