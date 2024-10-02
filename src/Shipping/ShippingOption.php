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
    public const TYPE_NAME = 'shippingOption';

    public function __construct(
        /**
         * Shipping option identifier.
         */
        protected string $id,
        /**
         * Option title.
         */
        protected string $title,
        /**
         * A list of objects used to calculate the total shipping costs.
         *
         * @var LabeledPricePart[]
         */
        protected array  $priceParts,
    ) {}

    public static function fromArray(array $array): ShippingOption
    {
        return new static(
            $array['id'],
            $array['title'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['price_parts']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
            'title' => $this->title,
            array_map(fn($x) => $x->typeSerialize(), $this->priceParts),
        ];
    }
}
