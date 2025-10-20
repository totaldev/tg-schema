<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks public post search limits without actually performing the search.
 */
class GetPublicPostSearchLimits extends TdFunction
{
    public const TYPE_NAME = 'getPublicPostSearchLimits';

    public function __construct(
        /**
         * Query that will be searched for.
         */
        protected string $query
    ) {}

    public static function fromArray(array $array): GetPublicPostSearchLimits
    {
        return new static(
            $array['query'],
        );
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'query' => $this->query,
        ];
    }
}
