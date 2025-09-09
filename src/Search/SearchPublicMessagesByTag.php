<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for public channel posts containing the given hashtag or cashtag. For optimal performance, the number of returned messages is chosen by TDLib and
 * can be smaller than the specified limit.
 */
class SearchPublicMessagesByTag extends TdFunction
{
    public const TYPE_NAME = 'searchPublicMessagesByTag';

    public function __construct(
        /**
         * Hashtag or cashtag to search for.
         */
        protected string $tag,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string $offset,
        /**
         * The maximum number of messages to be returned; up to 100. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int    $limit,
    ) {}

    public static function fromArray(array $array): SearchPublicMessagesByTag
    {
        return new static(
            $array['tag'],
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

    public function getTag(): string
    {
        return $this->tag;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'tag'    => $this->tag,
            'offset' => $this->offset,
            'limit'  => $this->limit,
        ];
    }
}
