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
    public const string TYPE_NAME = 'getSearchedForTags';

    public function __construct(
        /**
         * The maximum number of items to be returned.
         */
        protected int    $limit,
        /**
         * Prefix of hashtags or cashtags to return.
         */
        protected string $tagPrefix,
    ) {}

    public static function fromArray(array $array): GetSearchedForTags
    {
        return new static(
            limit    : $array['limit'],
            tagPrefix: $array['tag_prefix'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setTagPrefix(string $value): static
    {
        $this->tagPrefix = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'limit'      => $this->limit,
            'tag_prefix' => $this->tagPrefix,
        ];
    }
}
