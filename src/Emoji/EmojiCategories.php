<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of emoji categories
 */
class EmojiCategories extends TdObject
{
    public const TYPE_NAME = 'emojiCategories';

    /**
     * List of categories
     *
     * @var EmojiCategory[]
     */
    protected array $categories;

    public function __construct(array $categories)
    {
        $this->categories = $categories;
    }

    public static function fromArray(array $array): EmojiCategories
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['categories']),
        );
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->categories),
        ];
    }
}
