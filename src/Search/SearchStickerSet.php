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
    public const string TYPE_NAME = 'searchStickerSet';

    public function __construct(
        /**
         * Pass true to ignore local cache of sticker sets and always send a network request.
         */
        protected bool   $ignoreCache,
        /**
         * Name of the sticker set.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): SearchStickerSet
    {
        return new static(
            ignoreCache: $array['ignore_cache'],
            name       : $array['name'],
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

    public function setIgnoreCache(bool $value): static
    {
        $this->ignoreCache = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'ignore_cache' => $this->ignoreCache,
            'name'         => $this->name,
        ];
    }
}
