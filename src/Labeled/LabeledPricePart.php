<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Labeled;

use Totaldev\TgSchema\TdObject;

/**
 * Portion of the price of a product (e.g., "delivery cost", "tax amount").
 */
class LabeledPricePart extends TdObject
{
    public const TYPE_NAME = 'labeledPricePart';

    public function __construct(
        /**
         * Label for this portion of the product price.
         */
        protected string $label,
        /**
         * Currency amount in the smallest units of the currency.
         */
        protected int    $amount
    ) {}

    public static function fromArray(array $array): LabeledPricePart
    {
        return new static(
            $array['label'],
            $array['amount'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'label'  => $this->label,
            'amount' => $this->amount,
        ];
    }
}
