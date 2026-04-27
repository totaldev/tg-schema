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
    public const string TYPE_NAME = 'getGrossingWebAppBots';

    public function __construct(
        /**
         * The maximum number of bots to be returned; up to 100.
         */
        protected int    $limit,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
    ) {}

    public static function fromArray(array $array): GetGrossingWebAppBots
    {
        return new static(
            limit : $array['limit'],
            offset: $array['offset'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'limit'  => $this->limit,
            'offset' => $this->offset,
        ];
    }
}
