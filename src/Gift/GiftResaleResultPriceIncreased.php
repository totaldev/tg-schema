<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Operation has failed, because price has increased. If the price has decreased, then the buying will succeed anyway.
 */
class GiftResaleResultPriceIncreased extends GiftResaleResult
{
    public const string TYPE_NAME = 'giftResaleResultPriceIncreased';

    public function __construct(
        /**
         * New price for the gift.
         */
        protected GiftResalePrice $price
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiftResaleResultPriceIncreased
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
