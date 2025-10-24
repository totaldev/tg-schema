<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about Toncoins earned by the current user.
 */
class TonRevenueStatistics extends TdObject
{
    public const string TYPE_NAME = 'tonRevenueStatistics';

    public function __construct(
        /**
         * A graph containing amount of revenue in a given day.
         */
        protected StatisticalGraph $revenueByDayGraph,
        /**
         * Amount of earned revenue.
         */
        protected TonRevenueStatus $status,
        /**
         * Current conversion rate of nanotoncoin to USD cents.
         */
        protected float            $usdRate,
    ) {}

    public static function fromArray(array $array): TonRevenueStatistics
    {
        return new static(
            TdSchemaRegistry::fromArray($array['revenue_by_day_graph']),
            TdSchemaRegistry::fromArray($array['status']),
            $array['usd_rate'],
        );
    }

    public function getRevenueByDayGraph(): StatisticalGraph
    {
        return $this->revenueByDayGraph;
    }

    public function getStatus(): TonRevenueStatus
    {
        return $this->status;
    }

    public function getUsdRate(): float
    {
        return $this->usdRate;
    }

    public function setRevenueByDayGraph(StatisticalGraph $value): static
    {
        $this->revenueByDayGraph = $value;

        return $this;
    }

    public function setStatus(TonRevenueStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function setUsdRate(float $value): static
    {
        $this->usdRate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'revenue_by_day_graph' => $this->revenueByDayGraph->typeSerialize(),
            'status'               => $this->status->typeSerialize(),
            'usd_rate'             => $this->usdRate,
        ];
    }
}
