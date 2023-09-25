<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for a sticker set by its name
 */
class SearchStickerSet extends TdFunction
{
    public const TYPE_NAME = 'searchStickerSet';

    /**
     * Name of the sticker set
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromArray(array $array): SearchStickerSet
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
