<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for recently used hashtags by their prefix
 */
class SearchHashtags extends TdFunction
{
    public const TYPE_NAME = 'searchHashtags';

    /**
     * Hashtag prefix to search for
     *
     * @var string
     */
    protected string $prefix;

    /**
     * The maximum number of hashtags to be returned
     *
     * @var int
     */
    protected int $limit;

    public function __construct(string $prefix, int $limit)
    {
        $this->prefix = $prefix;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): SearchHashtags
    {
        return new static(
            $array['prefix'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'prefix' => $this->prefix,
            'limit' => $this->limit,
        ];
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
