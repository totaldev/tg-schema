<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Gift\GiftResalePrice;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The gift was bought from another user.
 */
class UpgradedGiftOriginResale extends UpgradedGiftOrigin
{
    public const string TYPE_NAME = 'upgradedGiftOriginResale';

    public function __construct(
        /**
         * Price paid for the gift.
         */
        protected GiftResalePrice $price
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginResale
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
