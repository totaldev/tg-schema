<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an emoji category.
 */
class EmojiCategory extends TdObject
{
    public const TYPE_NAME = 'emojiCategory';

    public function __construct(
        /**
         * Name of the category.
         */
        protected string              $name,
        /**
         * Custom emoji sticker, which represents icon of the category.
         */
        protected Sticker             $icon,
        /**
         * Source of stickers for the emoji category.
         */
        protected EmojiCategorySource $source,
        /**
         * True, if the category must be shown first when choosing a sticker for the start page.
         */
        protected bool                $isGreeting
    ) {}

    public static function fromArray(array $array): EmojiCategory
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
            TdSchemaRegistry::fromArray($array['source']),
            $array['is_greeting'],
        );
    }

    public function getIcon(): Sticker
    {
        return $this->icon;
    }

    public function getIsGreeting(): bool
    {
        return $this->isGreeting;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): EmojiCategorySource
    {
        return $this->source;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'name'        => $this->name,
            'icon'        => $this->icon->typeSerialize(),
            'source'      => $this->source->typeSerialize(),
            'is_greeting' => $this->isGreeting,
        ];
    }
}
