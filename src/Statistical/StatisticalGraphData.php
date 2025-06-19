<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

/**
 * A graph data.
 */
class StatisticalGraphData extends StatisticalGraph
{
    public const TYPE_NAME = 'statisticalGraphData';

    public function __construct(
        /**
         * Graph data in JSON format.
         */
        protected string $jsonData,
        /**
         * If non-empty, a token which can be used to receive a zoomed in graph.
         */
        protected string $zoomToken
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StatisticalGraphData
    {
        return new static(
            $array['json_data'],
            $array['zoom_token'],
        );
    }

    public function getJsonData(): string
    {
        return $this->jsonData;
    }

    public function getZoomToken(): string
    {
        return $this->zoomToken;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'json_data'  => $this->jsonData,
            'zoom_token' => $this->zoomToken,
        ];
    }
}
