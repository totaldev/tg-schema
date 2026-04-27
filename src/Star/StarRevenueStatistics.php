<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about Telegram Stars earned by a user or a chat.
 */
class StarRevenueStatistics extends TdObject
{
    public const string TYPE_NAME = 'starRevenueStatistics';

    public function __construct(
        /**
         * A graph containing amount of revenue in a given day.
         */
        protected StatisticalGraph  $revenueByDayGraph,
        /**
         * Telegram Star revenue status.
         */
        protected StarRevenueStatus $status,
        /**
         * Current conversion rate of a Telegram Star to USD.
         */
        protected float             $usdRate,
    ) {}

    public static function fromArray(array $array): StarRevenueStatistics
    {
        return new static(
            revenueByDayGraph: TdSchemaRegistry::fromArray($array['revenue_by_day_graph']),
            status           : TdSchemaRegistry::fromArray($array['status']),
            usdRate          : $array['usd_rate'],
        );
    }

    public function getRevenueByDayGraph(): StatisticalGraph
    {
        return $this->revenueByDayGraph;
    }

    public function getStatus(): StarRevenueStatus
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

    public function setStatus(StarRevenueStatus $value): static
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
            'revenue_by_day_graph' => $this->revenueByDayGraph->jsonSerialize(),
            'status'               => $this->status->jsonSerialize(),
            'usd_rate'             => $this->usdRate,
        ];
    }
}
