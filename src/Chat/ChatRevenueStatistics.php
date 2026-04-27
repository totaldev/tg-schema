<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about revenue earned from sponsored messages in a chat.
 */
class ChatRevenueStatistics extends TdObject
{
    public const string TYPE_NAME = 'chatRevenueStatistics';

    public function __construct(
        /**
         * Amount of earned revenue.
         */
        protected ChatRevenueAmount $revenueAmount,
        /**
         * A graph containing amount of revenue in a given hour.
         */
        protected StatisticalGraph  $revenueByHourGraph,
        /**
         * A graph containing amount of revenue.
         */
        protected StatisticalGraph  $revenueGraph,
        /**
         * Current conversion rate of the cryptocurrency in which revenue is calculated to USD.
         */
        protected float             $usdRate,
    ) {}

    public static function fromArray(array $array): ChatRevenueStatistics
    {
        return new static(
            revenueAmount     : TdSchemaRegistry::fromArray($array['revenue_amount']),
            revenueByHourGraph: TdSchemaRegistry::fromArray($array['revenue_by_hour_graph']),
            revenueGraph      : TdSchemaRegistry::fromArray($array['revenue_graph']),
            usdRate           : $array['usd_rate'],
        );
    }

    public function getRevenueAmount(): ChatRevenueAmount
    {
        return $this->revenueAmount;
    }

    public function getRevenueByHourGraph(): StatisticalGraph
    {
        return $this->revenueByHourGraph;
    }

    public function getRevenueGraph(): StatisticalGraph
    {
        return $this->revenueGraph;
    }

    public function getUsdRate(): float
    {
        return $this->usdRate;
    }

    public function setRevenueAmount(ChatRevenueAmount $value): static
    {
        $this->revenueAmount = $value;

        return $this;
    }

    public function setRevenueByHourGraph(StatisticalGraph $value): static
    {
        $this->revenueByHourGraph = $value;

        return $this;
    }

    public function setRevenueGraph(StatisticalGraph $value): static
    {
        $this->revenueGraph = $value;

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
            '@type'                 => static::TYPE_NAME,
            'revenue_amount'        => $this->revenueAmount->jsonSerialize(),
            'revenue_by_hour_graph' => $this->revenueByHourGraph->jsonSerialize(),
            'revenue_graph'         => $this->revenueGraph->jsonSerialize(),
            'usd_rate'              => $this->usdRate,
        ];
    }
}
