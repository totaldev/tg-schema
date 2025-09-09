<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of emoji categories.
 */
class EmojiCategories extends TdObject
{
    public const TYPE_NAME = 'emojiCategories';

    public function __construct(
        /**
         * List of categories.
         *
         * @var EmojiCategory[]
         */
        protected array $categories
    ) {}

    public static function fromArray(array $array): EmojiCategories
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['categories']),
        );
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'categories' => array_map(static fn($x) => $x->typeSerialize(), $this->categories),
        ];
    }
}
