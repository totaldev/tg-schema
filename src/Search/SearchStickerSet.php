<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for a sticker set by its name.
 */
class SearchStickerSet extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSet';

    public function __construct(
        /**
         * Name of the sticker set.
         */
        protected string $name,
        /**
         * Pass true to ignore local cache of sticker sets and always send a network request.
         */
        protected bool   $ignoreCache
    ) {}

    public static function fromArray(array $array): SearchStickerSet
    {
        return new static(
            $array['name'],
            $array['ignore_cache'],
        );
    }

    public function getIgnoreCache(): bool
    {
        return $this->ignoreCache;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'name'         => $this->name,
            'ignore_cache' => $this->ignoreCache,
        ];
    }
}
