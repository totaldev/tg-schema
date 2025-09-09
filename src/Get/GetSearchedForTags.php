<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns recently searched for hashtags or cashtags by their prefix.
 */
class GetSearchedForTags extends TdFunction
{
    public const TYPE_NAME = 'getSearchedForTags';

    public function __construct(
        /**
         * Prefix of hashtags or cashtags to return.
         */
        protected string $tagPrefix,
        /**
         * The maximum number of items to be returned.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): GetSearchedForTags
    {
        return new static(
            $array['tag_prefix'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getTagPrefix(): string
    {
        return $this->tagPrefix;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'tag_prefix' => $this->tagPrefix,
            'limit'      => $this->limit,
        ];
    }
}
