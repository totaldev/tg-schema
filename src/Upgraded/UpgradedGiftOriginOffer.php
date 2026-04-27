<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The gift was bought through an offer.
 */
class UpgradedGiftOriginOffer extends UpgradedGiftOrigin
{
    public const string TYPE_NAME = 'upgradedGiftOriginOffer';

    public function __construct(
        /**
         * Price paid for the gift.
         */
        protected GiftResalePrice $price
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginOffer
    {
        return new static(
            price: TdSchemaRegistry::fromArray($array['price']),
        );
    }

    public function getPrice(): GiftResalePrice
    {
        return $this->price;
    }

    public function setPrice(GiftResalePrice $value): static
    {
        $this->price = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'price' => $this->price->jsonSerialize(),
        ];
    }
}
