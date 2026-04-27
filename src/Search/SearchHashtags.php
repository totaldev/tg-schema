<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for recently used hashtags by their prefix.
 */
class SearchHashtags extends TdFunction
{
    public const string TYPE_NAME = 'searchHashtags';

    public function __construct(
        /**
         * The maximum number of hashtags to be returned.
         */
        protected int    $limit,
        /**
         * Hashtag prefix to search for.
         */
        protected string $prefix,
    ) {}

    public static function fromArray(array $array): SearchHashtags
    {
        return new static(
            limit : $array['limit'],
            prefix: $array['prefix'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setPrefix(string $value): static
    {
        $this->prefix = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'limit'  => $this->limit,
            'prefix' => $this->prefix,
        ];
    }
}
