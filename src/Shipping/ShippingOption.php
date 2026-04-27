<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Shipping;

use Totaldev\TgSchema\Labeled\LabeledPricePart;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * One shipping option.
 */
class ShippingOption extends TdObject
{
    public const string TYPE_NAME = 'shippingOption';

    public function __construct(
        /**
         * Shipping option identifier.
         */
        protected string $id,
        /**
         * A list of objects used to calculate the total shipping costs.
         *
         * @var LabeledPricePart[]
         */
        protected array  $priceParts,
        /**
         * Option title.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): ShippingOption
    {
        return new static(
            id        : $array['id'],
            priceParts: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['price_parts']),
            title     : $array['title'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPriceParts(): array
    {
        return $this->priceParts;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setPriceParts(array $value): static
    {
        $this->priceParts = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'price_parts' => array_map(static fn($x) => $x->jsonSerialize(), $this->priceParts),
            'title'       => $this->title,
        ];
    }
}
