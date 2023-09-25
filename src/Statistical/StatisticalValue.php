<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A value with information about its recent changes
 */
class StatisticalValue extends TdObject
{
    public const TYPE_NAME = 'statisticalValue';

    /**
     * The growth rate of the value, as a percentage
     *
     * @var float
     */
    protected float $growthRatePercentage;

    /**
     * The value for the previous day
     *
     * @var float
     */
    protected float $previousValue;

    /**
     * The current value
     *
     * @var float
     */
    protected float $value;

    public function __construct(float $value, float $previousValue, float $growthRatePercentage)
    {
        $this->value = $value;
        $this->previousValue = $previousValue;
        $this->growthRatePercentage = $growthRatePercentage;
    }

    public static function fromArray(array $array): StatisticalValue
    {
        return new static(
            $array['value'],
            $array['previous_value'],
            $array['growth_rate_percentage'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
            'previous_value' => $this->previousValue,
            'growth_rate_percentage' => $this->growthRatePercentage,
        ];
    }
}
