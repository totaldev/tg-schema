<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

use Totaldev\TgSchema\TdObject;

/**
 * A value with information about its recent changes.
 */
class StatisticalValue extends TdObject
{
    public const string TYPE_NAME = 'statisticalValue';

    public function __construct(
        /**
         * The growth rate of the value, as a percentage.
         */
        protected float $growthRatePercentage,
        /**
         * The value for the previous day.
         */
        protected float $previousValue,
        /**
         * The current value.
         */
        protected float $value,
    ) {}

    public static function fromArray(array $array): StatisticalValue
    {
        return new static(
            growthRatePercentage: $array['growth_rate_percentage'],
            previousValue       : $array['previous_value'],
            value               : $array['value'],
        );
    }

    public function getGrowthRatePercentage(): float
    {
        return $this->growthRatePercentage;
    }

    public function getPreviousValue(): float
    {
        return $this->previousValue;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setGrowthRatePercentage(float $value): static
    {
        $this->growthRatePercentage = $value;

        return $this;
    }

    public function setPreviousValue(float $value): static
    {
        $this->previousValue = $value;

        return $this;
    }

    public function setValue(float $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'growth_rate_percentage' => $this->growthRatePercentage,
            'previous_value'         => $this->previousValue,
            'value'                  => $this->value,
        ];
    }
}
