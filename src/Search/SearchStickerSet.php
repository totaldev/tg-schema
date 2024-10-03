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
        protected string $name
    ) {}

    public static function fromArray(array $array): SearchStickerSet
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
