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
    public const string TYPE_NAME = 'labeledPricePart';

    public function __construct(
        /**
         * Currency amount in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Label for this portion of the product price.
         */
        protected string $label,
    ) {}

    public static function fromArray(array $array): LabeledPricePart
    {
        return new static(
            amount: $array['amount'],
            label : $array['label'],
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

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setLabel(string $value): static
    {
        $this->label = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'amount' => $this->amount,
            'label'  => $this->label,
        ];
    }
}
