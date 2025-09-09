<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

/**
 * The graph data to be asynchronously loaded through getStatisticalGraph.
 */
class StatisticalGraphAsync extends StatisticalGraph
{
    public const TYPE_NAME = 'statisticalGraphAsync';

    public function __construct(
        /**
         * The token to use for data loading.
         */
        protected string $token
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StatisticalGraphAsync
    {
        return new static(
            $array['token'],
        );
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'token' => $this->token,
        ];
    }
}
