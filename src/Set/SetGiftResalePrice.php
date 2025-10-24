<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes resale price of a unique gift owned by the current user.
 */
class SetGiftResalePrice extends TdFunction
{
    public const string TYPE_NAME = 'setGiftResalePrice';

    public function __construct(
        /**
         * Identifier of the unique gift.
         */
        protected string           $receivedGiftId,
        /**
         * The new price for the unique gift; pass null to disallow gift resale. The current user will receive getOption("gift_resale_star_earnings_per_mille") Telegram Stars for each 1000 Telegram Stars paid for the gift if the gift price is in Telegram Stars or getOption("gift_resale_ton_earnings_per_mille") Toncoins for each 1000 Toncoins paid for the gift if the gift price is in Toncoins.
         */
        protected ?GiftResalePrice $price = null,
    ) {}

    public static function fromArray(array $array): SetGiftResalePrice
    {
        return new static(
            $array['received_gift_id'],
            isset($array['price']) ? TdSchemaRegistry::fromArray($array['price']) : null,
        );
    }

    public function getPrice(): ?GiftResalePrice
    {
        return $this->price;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function setPrice(?GiftResalePrice $value): static
    {
        $this->price = $value;

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
            'received_gift_id' => $this->receivedGiftId,
            'price'            => $this->price ?? null,
        ];
    }
}
