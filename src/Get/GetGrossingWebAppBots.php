<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the most grossing Web App bots.
 */
class GetGrossingWebAppBots extends TdFunction
{
    public const TYPE_NAME = 'getGrossingWebAppBots';

    public function __construct(
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of bots to be returned; up to 100.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): GetGrossingWebAppBots
    {
        return new static(
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'offset' => $this->offset,
            'limit'  => $this->limit,
        ];
    }
}
